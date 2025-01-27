<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Contato extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('contato')
            ->schema([
                TextInput::make('address')->label('Endereço'),
                TextInput::make('rawMap')->label('Codigo do mapa')
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}