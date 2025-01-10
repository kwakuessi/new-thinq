<?php

namespace App\Filament\Resources\BookingResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\BookingResource;
use Filament\Resources\Pages\ListRecords\Tab;

class ListBookings extends ListRecords
{
    protected static string $resource = BookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),
            'Air Freight' => Tab::make()->query(fn ($query) => $query->where('order_type', 'customer_order'))->icon('ri-plane-fill'),
            'Sea Freight' => Tab::make()->query(fn ($query) => $query->where('order_type', 'shipment'))->icon('ri-ship-line'),
            'Rail Freight' => Tab::make()->query(fn ($query) => $query->where('order_type', 'shipment')),
            'Road Freight' => Tab::make()->query(fn ($query) => $query->where('order_type', 'shipment')),
            'Container' => Tab::make()->query(fn ($query) => $query->where('order_type', 'shipment')),
            
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return BookingResource::getWidgets();
    }
}
