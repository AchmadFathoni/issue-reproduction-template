<?php

namespace App\Filament\Admin\Resources\Items\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('name')->required(),

                Textarea::make('description')->nullable()->rows(4),
                TextInput::make('price')->numeric()->nullable()->prefix('$'),
                TextInput::make('quantity')->numeric()->nullable(),
                TextInput::make('sku')->nullable(),
                TextInput::make('status')->nullable(),

                Textarea::make('notes')->nullable()->rows(4)->label('Notes'),
                Textarea::make('field_a')->nullable()->rows(3)->label('Padding Field A'),
                Textarea::make('field_b')->nullable()->rows(3)->label('Padding Field B'),
                Textarea::make('field_c')->nullable()->rows(3)->label('Padding Field C'),
                Textarea::make('field_d')->nullable()->rows(3)->label('Padding Field D'),
                Textarea::make('field_e')->nullable()->rows(3)->label('Padding Field E'),
                Textarea::make('field_f')->nullable()->rows(3)->label('Padding Field F'),
                Textarea::make('field_g')->nullable()->rows(3)->label('Padding Field G'),
                Textarea::make('field_h')->nullable()->rows(3)->label('Padding Field H'),

                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->createOptionForm([
                        TextInput::make('name')->label('Category Name')->required(),
                    ])
                    ->searchable()
                    ->preload(),
            ]);
    }
}
