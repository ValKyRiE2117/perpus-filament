<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class BooksForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('isbn')
                    ->name('International Standard Book Number (isbn)')
                    ->required()
                    ->maxLength(255),
                TextInput::make('title')
                    ->name('Title')
                    ->required()
                    ->maxLength(255),
                Select::make('author_id')
                    ->name('Author')
                    ->relationship('author', 'name')
                    ->required()
                    ->searchable()
                    ->loadingMessage('Loading authors...')
                    ->preload(),
                Select::make('categories_id')
                    ->name('Category')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable()
                    ->loadingMessage('Loading categories...')
                    ->preload(),
                Textarea::make('description')
                    ->name('Description')
                    ->maxLength(1000),
                TextInput::make('pages')
                    ->numeric()
                    ->name('Pages')
                    ->minValue(0)
                    ->required(),
                TextInput::make('publisher')
                    ->name('Publisher')
                    ->maxLength(255),
                TextInput::make('published_year')
                    ->name('Published Year')
                    ->maxLength(4)
                    ->placeholder('YYYY'),
                TextInput::make('stock')
                    ->numeric()
                    ->name('Quantity')
                    ->minValue(0)
                    ->required(),
                // FileUpload::make('cover_images')
                //     ->name('Cover Image')
                //     ->image()
                //     ->maxSize(2048),
            ]);
    }
}
