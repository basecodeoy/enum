<?php

declare(strict_types=1);

namespace BombenProdukt\EnumPowerpack\Concerns;

trait EnumeratesKeys
{
    public static function keys(): array
    {
        return \array_column(self::cases(), 'name');
    }
}
