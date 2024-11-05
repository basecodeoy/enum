<?php

declare(strict_types=1);

namespace Tests\Unit\Concerns;

use Tests\Fixtures\TestEnum;

test('it returns the correct values from the enum', function (): void {
    $values = TestEnum::values();

    expect($values)->toHaveCount(2);
    expect($values)->toBe(['one', 'two']);
});
