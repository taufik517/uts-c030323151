<?php

namespace App\Filament\Resources\NaturalResource\Pages;

use App\Filament\Resources\NaturalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNaturals extends ListRecords
{
    protected static string $resource = NaturalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
