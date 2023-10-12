<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Models\section;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ProjectResource;
use App\Models\project;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
            function(project $record){
                if($record->thumbnail){
                    Storage::disk('public')->delete($record->thumbnail);
                }
            }
        ),
        ];
    }
}
