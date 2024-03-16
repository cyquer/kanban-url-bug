<?php

namespace App\Filament\Resources\MyRecordResource\Pages;

use App\Filament\Resources\MyRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMyRecord extends EditRecord
{
    protected static string $resource = MyRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
