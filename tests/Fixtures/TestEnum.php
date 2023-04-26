<?php

declare(strict_types=1);

namespace Tests\Fixtures;

use BombenProdukt\EnumPowerpack\Concerns\EnumeratesKeys;
use BombenProdukt\EnumPowerpack\Concerns\EnumeratesValues;
use BombenProdukt\EnumPowerpack\Concerns\FromString;

enum TestEnum: string
{
    use EnumeratesKeys;
    use EnumeratesValues;
    use FromString;

    case ONE = 'one';

    case TWO = 'two';
}
