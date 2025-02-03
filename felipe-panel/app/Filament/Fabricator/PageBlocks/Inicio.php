<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Inicio extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('inicio')
            ->schema([
                TextInput::make('homeName')
                    ->label("Titulo da pagina")
                    ->helperText('Digite o nome da pagina'),
                TextInput::make('phone')
                    ->label('Telefone')
                    ->helperText('Digite o telefone mais utilizado para whats e contato'),
                FileUpload::make('homeImage')
                    ->label("Imagem de capa")
                    ->image()
                    ->imageEditor()
                
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
