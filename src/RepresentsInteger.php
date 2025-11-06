<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces;

interface RepresentsInteger extends RepresentsType, \Stringable
{
	public function toInteger(): int;

	public function toString(): string;

	public function toFloat(): float;

	public function isGreaterThan( RepresentsInteger|int $value ): bool;

	public function isGreaterThanOrEqual( RepresentsInteger|int $value ): bool;

	public function isLessThan( RepresentsInteger|int $value ): bool;

	public function isLessThanOrEqual( RepresentsInteger|int $value ): bool;

	public function isEqual( RepresentsInteger|int $value ): bool;

	public function isZero(): bool;

	public function isPositive(): bool;

	public function isNegative(): bool;

	public function isPositiveOrZero(): bool;

	public function isNegativeOrZero(): bool;

	public function add( RepresentsInteger|int $value ): static;

	public function subtract( RepresentsInteger|int $value ): static;

	public function multiply( RepresentsInteger|int $value ): static;

	public function increment( RepresentsInteger|int $value = 1 ): static;

	public function decrement( RepresentsInteger|int $value = 1 ): static;
}
