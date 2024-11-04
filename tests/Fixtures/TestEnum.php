<?php

declare(strict_types=1);

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
