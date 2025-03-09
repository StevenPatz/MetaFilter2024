<?php

declare(strict_types=1);

namespace App\Filament\Resources\SubsiteResource\Pages;

use App\Filament\Resources\SubsiteResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditSubsite extends EditRecord
{
    protected static string $resource = SubsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
