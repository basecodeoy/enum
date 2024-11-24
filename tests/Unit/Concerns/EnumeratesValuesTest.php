<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit\Concerns;

use Tests\Fixtures\TestEnum;

test('it returns the correct values from the enum', function (): void {
    $values = TestEnum::values();

    expect($values)->toHaveCount(2);
    expect($values)->toBe(['one', 'two']);
});
