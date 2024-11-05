<?php

declare(strict_types=1);

namespace BaseCodeOy\EnumPowerpack\Concerns;

trait EnumeratesValues
{
    public static function values(): array
    {
        return \array_column(self::cases(), 'value');
    }
}
