<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\EnumPowerpack\Concerns;

trait FromString
{
    public static function fromString(string $value): self
    {
        foreach (self::cases() as $status) {
            if ($value === $status->name) {
                return $status;
            }
        }

        throw new \ValueError("{$value} is not a valid backing value for enum ".self::class);
    }

    public static function tryfromString(string $value): ?self
    {
        try {
            return self::fromString($value);
        } catch (\ValueError) {
            return null;
        }
    }
}
