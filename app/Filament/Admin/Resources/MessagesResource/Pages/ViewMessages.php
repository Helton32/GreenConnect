<?php

namespace App\Filament\Admin\Resources\MessagesResource\Pages;

use App\Filament\Admin\Resources\MessagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMessages extends ViewRecord
{
    protected static string $resource = MessagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
