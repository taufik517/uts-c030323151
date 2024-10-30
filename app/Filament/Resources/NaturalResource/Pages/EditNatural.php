<?php

namespace App\Filament\Resources\NaturalResource\Pages;

use App\Filament\Resources\NaturalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNatural extends EditRecord
{
    protected static string $resource = NaturalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
