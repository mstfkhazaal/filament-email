<?php

namespace RickDBCN\FilamentEmail;

use Filament\Contracts\Plugin;
use Filament\Panel;
use RickDBCN\FilamentEmail\Filament\Resources\EmailResource;
use RickDBCN\FilamentEmail\Filament\Resources\IntegrationResource;

class FilamentEmailPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-email';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            EmailResource::class,
            IntegrationResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {

    }
}
