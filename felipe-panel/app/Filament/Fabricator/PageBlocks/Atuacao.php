<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Icetalker\FilamentTableRepeater\Forms\Components\TableRepeater;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Atuacao extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('atuacao')
            ->schema([
                TableRepeater::make('items')
                ->reorderable(false)
                ->reorderableWithButtons(false)
                    ->schema([
                        TextInput::make('area')
                            ->label('Area de atuação')->columnSpan(1),
                        RichEditor::make("description")
                            ->label('Descrição')->columnSpan(1)
                    ])
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
