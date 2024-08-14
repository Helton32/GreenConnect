<?php

namespace App\Filament\Admin\Resources\MessagesResource\Pages;

use App\Filament\Admin\Resources\MessagesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMessages extends CreateRecord
{
    protected static string $resource = MessagesResource::class;
}
