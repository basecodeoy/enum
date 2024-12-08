<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Enum\Concerns;

trait EnumeratesKeys
{
    public static function keys(): array
    {
        return \array_column(self::cases(), 'name');
    }
}
