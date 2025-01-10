<?php

namespace App\Filament\Resources\BookingResource\Widgets;

use Illuminate\Support\HtmlString;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class BookingOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                new HtmlString('<div class="flex  items-center"><svg class="size-5 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none"><g transform="translate(3, 3)"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M13.1976 1.21963L3.11967 11.2976C2.9692 11.448 2.87065 11.6426 2.83836 11.8529L2.13291 16.4474C2.03041 17.115 2.60551 17.6901 3.27309 17.5876L7.86762 16.8822C8.07795 16.8499 8.2725 16.7513 8.42297 16.6009L18.5009 6.52294C18.8914 6.13241 18.8914 5.49925 18.5009 5.10872L14.6118 1.21963C14.2213 0.82911 13.5881 0.829111 13.1976 1.21963ZM4.31657 15.404L4.76548 12.4802L13.9047 3.34095L16.3796 5.81583L7.24036 14.9551L4.31657 15.404Z" fill="currentColor"></path><path d="M11.442 5.24658L12.5027 4.18592L15.7436 7.42683L14.6829 8.48749L11.442 5.24658Z" fill="currentColor"></path></g></g><path fill-rule="evenodd" clip-rule="evenodd" d="M13 24C19.0751 24 24 19.0751 24 13C24 6.92487 19.0751 2 13 2C6.92487 2 2 6.92487 2 13C2 19.0751 6.92487 24 13 24ZM13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26Z" fill="currentColor"></path></svg> <div class="ml-1">Booking</div></div>')
                ,
                '536'
            )
                ->description(new HtmlString("<div class='text-xs'>+85% <span class='text-gray-400'>vs last month</span> </div>"))
                // ->color('#004581')
                // ->chartColor('#004581')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make(new HtmlString('<div class="flex  items-center"><svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg> <div class="ml-1">Delivery</div></div>')
            , '273')
                ->description('+45% vs last month')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make(new HtmlString('<div class="flex  items-center"><svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
</svg><div class="ml-1">Pending</div></div>')
            , '108')
                ->description('+25% vs last month')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
        ];
    }
}
