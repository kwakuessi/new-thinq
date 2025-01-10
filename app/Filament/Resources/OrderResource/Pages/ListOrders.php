<?php

namespace App\Filament\Resources\OrderResource\Pages;

use Filament\Actions;
use App\Filament\Resources\OrderResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;
use App\Filament\Resources\OrderResource\Widgets\OrdersStatsOverview;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

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
            'products' => Tab::make()->query(fn ($query) => $query->where('order_type', 'customer_order')),
            'shipments' => Tab::make()->query(fn ($query) => $query->where('order_type', 'shipment')),
            
        ];
    }
 
    protected function getHeaderWidgets(): array
    {
        return OrderResource::getWidgets();
    }
}
