<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Index extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.index';

    protected static ?string $title = 'Dashboard';
}