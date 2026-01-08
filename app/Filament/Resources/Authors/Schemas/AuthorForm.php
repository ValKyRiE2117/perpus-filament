<?php

namespace App\Filament\Resources\Authors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class AuthorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Author Name')
                    ->required()
                    ->maxLength(255),

                Textarea::make('biography')
                    ->label('Biography')
                    ->required()
                    ->rows(5),

                TextInput::make('nationality')
                    ->required()
                    ->maxLength(100),
            ]);
    }
}