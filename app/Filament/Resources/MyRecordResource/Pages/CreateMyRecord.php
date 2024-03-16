<?php

namespace App\Filament\Resources\MyRecordResource\Pages;

use App\Filament\Resources\MyRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMyRecord extends CreateRecord
{
    protected static string $resource = MyRecordResource::class;
}
