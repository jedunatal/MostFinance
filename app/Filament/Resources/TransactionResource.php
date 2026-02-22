<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            // Campo de Descrição
            Forms\Components\TextInput::make('description')
                ->required(),

            // Campo de Valor
            Forms\Components\TextInput::make('amount')
                ->numeric()
                ->required()
                ->prefix('R$'),

            // Campo de Data
            Forms\Components\DatePicker::make('date')
                ->required(),

            // Campo de Seleção (Tipo: Entrada ou Saída)
            Forms\Components\Select::make('type')
                ->options([
                    'income' => 'Receita',
                    'expense' => 'Despesa',
                ])
                ->required()
                ->label('Tipo'),
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //Mostra a descrição da transação
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                
                //Mostra o valor da transação formatado como moeda
                Tables\Columns\TextColumn::make('amount')
                    ->money('BRL')
                    ->sortable(),
                
                //Mostra a data da transação formatada
                Tables\Columns\TextColumn::make('date')
                    ->date('d/m/Y')
                    ->sortable(),
                
                //Mostra o tipo da transação (Entrada ou Saída)
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->color(function (?string $state): string {
                        if ($state === 'income') return 'success';
                        if ($state === 'expense') return 'danger';
                        return 'gray';
                    })
                    ->formatStateUsing(fn (string $state): string => $state === 'income' ? 'Receita' : 'Despesa'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
