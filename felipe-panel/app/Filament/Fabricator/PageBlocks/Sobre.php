<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Infolists\Components\TextEntry;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Sobre extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('sobre')
            ->schema([
                RichEditor::make("about")->label("Sobre nós"),
                FileUpload::make('aboutImage1')
                    ->label("Imagem sobre 1")
                    ->deletable(true)
                    ->image()
                    ->imageEditor(),
                FileUpload::make('aboutImage2')
                    ->label("Imagem sobre 2")
                    ->deletable(true)
                    ->image()
                    ->imageEditor(),
                FileUpload::make('aboutImage3')
                    ->label("Imagem sobre 3")
                    ->deletable(true)
                    ->image()
                    ->imageEditor()
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
