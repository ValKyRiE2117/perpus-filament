<?php

namespace App\Filament\Resources\Loans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Date;

class LoansForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('loan_code')
                    ->name('Loan Code')
                    ->required()
                    ->maxLength(255),
                Select::make('members_id')
                    ->name('Member')
                    ->relationship('member', 'name')
                    ->required()
                    ->searchable()
                    ->loadingMessage('Loading members...')
                    ->preload(),
                Select::make('book_id')
                    ->name('Book')
                    ->relationship('book', 'title')
                    ->required()
                    ->searchable()
                    ->loadingMessage('Loading books...')
                    ->preload(),
                DatePicker::make('loan_date')
                    ->name('Loan Date')
                    ->default(Date::now())
                    ->required(),
                DatePicker::make('due_date')
                    ->name('Due Date')
                    ->required(),
                DatePicker::make('return_date')
                    ->name('Return Date'),
                Radio::make('status')
                    ->name('Status')
                    ->options([
                        'borrowed' => 'Borrowed',
                        'returned' => 'Returned',
                        'overdue' => 'Overdue',
                    ])
                    ->default('borrowed')
                    ->required()
                    ->inline(),
            ]);
    }
}
