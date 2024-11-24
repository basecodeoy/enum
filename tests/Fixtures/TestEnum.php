<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Fixtures;

use BaseCodeOy\EnumPowerpack\Concerns\EnumeratesKeys;
use BaseCodeOy\EnumPowerpack\Concerns\EnumeratesValues;
use BaseCodeOy\EnumPowerpack\Concerns\FromString;

enum TestEnum: string
{
    use EnumeratesKeys;
    use EnumeratesValues;
    use FromString;

    case ONE = 'one';

    case TWO = 'two';
}
