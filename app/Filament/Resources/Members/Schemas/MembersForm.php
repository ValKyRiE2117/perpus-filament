<?php

namespace App\Filament\Resources\Members\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MembersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->required()
                    ->email(),
                TextInput::make('phone')
                    ->required()
                    ->maxLength(20),
                TextInput::make('address')
                    ->required()
                    ->maxLength(500),
            ]);
    }
}
