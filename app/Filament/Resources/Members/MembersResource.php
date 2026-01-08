<?php

namespace App\Filament\Resources\Members;

use App\Filament\Resources\Members\Pages\CreateMembers;
use App\Filament\Resources\Members\Pages\EditMembers;
use App\Filament\Resources\Members\Pages\ListMembers;
use App\Filament\Resources\Members\Schemas\MembersForm;
use App\Filament\Resources\Members\Tables\MembersTable;
use App\Models\MembersModel as Members;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MembersResource extends Resource
{
    protected static ?string $model = Members::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUsers;

    protected static ?string $recordTitleAttribute = 'Members';

    public static function form(Schema $schema): Schema
    {
        return MembersForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MembersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMembers::route('/'),
            'create' => CreateMembers::route('/create'),
            'edit' => EditMembers::route('/{record}/edit'),
        ];
    }
}
