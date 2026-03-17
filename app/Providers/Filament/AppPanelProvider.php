<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;

use Illuminate\Cookie\Middleware\{AddQueuedCookiesToResponse, EncryptCookies};
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\{AuthenticateSession, StartSession};
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('app')
            ->path('dashboard')
            ->colors($this->colors())
            ->discoverResources(...$this->resourceConfig())
            ->discoverPages(...$this->pageConfig())
            ->pages($this->pages())
            ->discoverWidgets(...$this->widgetConfig())
            ->widgets($this->widgets())
            ->middleware($this->middleware())
            ->authMiddleware($this->authMiddleware());
    }

    private function colors(): array
    {
        return [
            'primary' => Color::Emerald,
        ];
    }

    private function resourceConfig(): array
    {
        return [
            'in' => app_path('Filament/App/Resources'),
            'for' => 'App\\Filament\\App\\Resources',
        ];
    }

    private function pageConfig(): array
    {
        return [
            'in' => app_path('Filament/App/Pages'),
            'for' => 'App\\Filament\\App\\Pages',
        ];
    }

    private function widgetConfig(): array
    {
        return [
            'in' => app_path('Filament/App/Widgets'),
            'for' => 'App\\Filament\\App\\Widgets',
        ];
    }

    private function pages(): array
    {
        return [
            \App\Filament\App\Pages\ControlPanel::class,
        ];
    }

    private function widgets(): array
    {
        return [
            AccountWidget::class,
        ];
    }

    private function middleware(): array
    {
        return [
            EncryptCookies::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            AuthenticateSession::class,
            ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            SubstituteBindings::class,
            DisableBladeIconComponents::class,
            DispatchServingFilamentEvent::class,
        ];
    }

    private function authMiddleware(): array
    {
        return [
            Authenticate::class,
        ];
    }
}