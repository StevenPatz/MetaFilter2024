<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\SnippetsResource\Pages\CreateSnippets;
use App\Filament\Resources\SnippetsResource\Pages\EditSnippets;
use App\Filament\Resources\SnippetsResource\Pages\ListSnippets;
use App\Models\Snippet;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class SnippetResource extends Resource
{
    protected static ?string $model = Snippet::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => ListSnippets::route('/'),
            'create' => CreateSnippets::route('/create'),
            'edit' => EditSnippets::route('/{record}/edit'),
        ];
    }
}
