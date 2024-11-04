<?php

declare(strict_types=1);

namespace BaseCodeOy\EnumPowerpack\Concerns;

trait EnumeratesKeys
{
    public static function keys(): array
    {
        return \array_column(self::cases(), 'name');
    }
}
