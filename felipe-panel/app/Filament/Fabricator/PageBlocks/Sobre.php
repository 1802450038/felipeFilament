<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Infolists\Components\TextEntry;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Sobre extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('sobre')
            ->schema([
                RichEditor::make("about")->label("Sobre nós")
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
