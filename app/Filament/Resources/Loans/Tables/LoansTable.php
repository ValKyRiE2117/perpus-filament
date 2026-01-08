<?php

namespace App\Filament\Resources\Loans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LoansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('member.name')
                    ->label('Member')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('book.title')
                    ->label('Book')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('loan_date')
                    ->label('Loan Date')
                    ->date()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('due_date')
                    ->label('Due Date')
                    ->date()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'borrowed' => 'warning',
                        'returned' => 'success',
                        'overdue' => 'danger',
                    })
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
