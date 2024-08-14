<?php

namespace App\Filament\Admin\Resources\MessagesResource\Pages;

use App\Filament\Admin\Resources\MessagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMessages extends EditRecord
{
    protected static string $resource = MessagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
