<?php

declare(strict_types=1);

namespace App\Filament\Resources\CommentResource\Widgets;

use App\Models\Comment;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

final class Comments extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Comment::query(),
            )
            ->columns([
                // ...
            ]);
    }
}
