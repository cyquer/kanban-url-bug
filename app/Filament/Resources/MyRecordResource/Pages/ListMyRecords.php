<?php

namespace App\Filament\Resources\MyRecordResource\Pages;

use App\Filament\Resources\MyRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMyRecords extends ListRecords
{
    protected static string $resource = MyRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
