<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces;

interface RepresentsFloat extends RepresentsType, \Stringable
{
	public function toFloat(): float;

	public function toString( int $decimals = 0 ): string;

	public function isZero(): bool;

	public function isPositive(): bool;

	public function isNegative(): bool;

	public function isPositiveOrZero(): bool;

	public function isNegativeOrZero(): bool;

	public function isGreaterThan( RepresentsFloat|float $value ): bool;

	public function isGreaterThanOrEqual( RepresentsFloat|float $value ): bool;

	public function isLessThan( RepresentsFloat|float $value ): bool;

	public function isLessThanOrEqual( RepresentsFloat|float $value ): bool;

	public function isEqual( RepresentsFloat|float $value ): bool;

	public function add( RepresentsFloat|RepresentsInteger|float|int $value ): static;

	public function subtract( RepresentsFloat|RepresentsInteger|float|int $value ): static;

	public function multiply( RepresentsFloat|RepresentsInteger|float|int $value ): static;

	public function divide( RepresentsFloat|RepresentsInteger|float|int $value ): static;
}
