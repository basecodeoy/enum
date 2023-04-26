<?php

declare(strict_types=1);

namespace Tests\Unit\Concerns;

use Tests\Fixtures\TestEnum;

test('it can create an enum from a string', function (): void {
    $enum = TestEnum::fromString('ONE');

    expect($enum)->toBeInstanceOf(TestEnum::class);
    expect($enum->name)->toBe('ONE');
    expect($enum->value)->toBe('one');
});

test('it throws a ValueError if the string does not match any enum case', function (): void {
    TestEnum::fromString('INVALID_VALUE');
})->throws('INVALID_VALUE is not a valid backing value for enum Tests\\Fixtures\\TestEnum');

test('it returns null if tryfromString does not find a matching case', function (): void {
    expect(TestEnum::tryfromString('INVALID_VALUE'))->toBeNull();
});

test('it returns a valid enum instance when using tryfromString with a valid case', function (): void {
    $enum = TestEnum::tryfromString('ONE');

    expect($enum)->toBeInstanceOf(TestEnum::class);
    expect($enum->name)->toBe('ONE');
    expect($enum->value)->toBe('one');
});
