<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;

enum StatusArticleEnum: int implements HasLabel, HasColor
{
    case PENDIENTE = 0;
    case PUBLICADO = 1;
    case ELIMINADO = 2;

    public function getLabel(): string
    {
        return match ($this) {
            self::PENDIENTE => 'Pendiente',
            self::PUBLICADO => 'Publicado',
            self::ELIMINADO => 'Eliminado',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::PENDIENTE => 'warning',
            self::PUBLICADO => 'success',
            self::ELIMINADO => 'danger',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::PENDIENTE => '#0069D9',
            self::PUBLICADO => '#218838',
            self::ELIMINADO => '#C82333',
            default => '#C82333',
        };
    }
}