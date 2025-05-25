<?php

declare(strict_types=1);

namespace App\Filament\Resources\StateResource\Pages;

use App\Filament\Resources\StateResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateState extends CreateRecord
{
    protected static string $resource = StateResource::class;
}
