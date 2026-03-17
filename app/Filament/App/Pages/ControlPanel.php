<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class ControlPanel extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

    protected static string $view = 'filament.app.pages.control-panel';
    
    protected static ?string $slug = '/'; 

    protected static ?string $navigationLabel = 'Meu Painel';

    protected static ?string $title = 'Controle Financeiro';
}