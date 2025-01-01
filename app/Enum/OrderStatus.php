<?php

namespace App\Enum;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum OrderStatus: string implements HasColor, HasIcon, HasLabel
{
    case Pending = 'pending';

    case En_route = 'en_route';

    case Complete = 'complete';





    public function getLabel(): string
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::En_route => 'En_route',
            self::Complete => 'Complete',


        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Pending => 'info',
            self::En_route => 'warning',
            self::Complete => 'success',


        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Pending => 'heroicon-m-arrow-path',
            self::En_route => 'heroicon-m-truck',
            self::Complete => 'heroicon-m-check-badge',


        };
    }
}