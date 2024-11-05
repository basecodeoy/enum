<?php

declare(strict_types=1);

namespace Tests\Unit\Concerns;

use Tests\Fixtures\TestEnum;

test('it returns the correct keys from the enum', function (): void {
    $keys = TestEnum::keys();

    expect($keys)->toHaveCount(2);
    expect($keys)->toBe(['ONE', 'TWO']);
});
