<?php

declare(strict_types=1);

namespace BombenProdukt\EnumPowerpack\Concerns;

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

    public static function tryfromString(string $value): self|null
    {
        try {
            return self::fromString($value);
        } catch (\ValueError) {
            return null;
        }
    }
}
