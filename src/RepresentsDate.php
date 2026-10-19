<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces;

interface RepresentsDate extends RepresentsType, \Stringable
{
	public function equalsValue( RepresentsDate $value ): bool;

	public function toString(): string;

	public function toDateTime(): \DateTimeInterface;

	public function add( \DateInterval $dateInterval ): static;

	public function sub( \DateInterval $dateInterval ): static;

	public function diff( RepresentsDate $anotherDate, bool $absolute = false ): \DateInterval;

	public function isLessThan( RepresentsDate|\DateTimeInterface|string $value ): bool;

	public function isGreaterThan( RepresentsDate|\DateTimeInterface|string $value ): bool;

	public function isGreaterThanOrEqual( RepresentsDate|\DateTimeInterface|string $value ): bool;

	public function isLessThanOrEqual( RepresentsDate|\DateTimeInterface|string $value ): bool;

	public function hasExpired( ?\DateInterval $expirationInterval = null, null|RepresentsDate|\DateTimeInterface $referenceTime = null ): bool;

	public function format( string $format ): string;

	public function getOffset(): int;

	public function getTimestamp(): int;

	public function getTimezone(): \DateTimeZone;
}
