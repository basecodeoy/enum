<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit\Concerns;

use Tests\Fixtures\TestEnum;

test('it returns the correct keys from the enum', function (): void {
    $keys = TestEnum::keys();

    expect($keys)->toHaveCount(2);
    expect($keys)->toBe(['ONE', 'TWO']);
});
