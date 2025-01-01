<?php

namespace App\Enum;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum OrderType: string implements HasColor, HasIcon, HasLabel
{
    case Shipment = 'shipment';

    case Customer_order = 'customer_order';




    public function getLabel(): string
    {
        return match ($this) {
            self::Shipment => 'shipment',
            self::Customer_order => 'customer_order',

        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Shipment => 'info',
            self::Customer_order => 'warning',

        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Shipment => 'heroicon-o-truck',
            self::Customer_order => 'heroicon-o-cube',
        };
    }
}
