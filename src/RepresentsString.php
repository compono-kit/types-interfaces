<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces;

interface RepresentsString extends RepresentsType, \Stringable
{
	public function equalsValue( string|\Stringable $value ): bool;

	public function toString(): string;

	public function isEmpty(): bool;

	public function getByteLength(): int;

	public function countChars(): int;

	public function trim( string $characters = " \n\r\t\v\x00" ): static;

	public function replace( array|string|\Stringable $search, array|string|\Stringable $replace ): static;

	public function substring( int $offset, ?int $length = null ): static;

	public function toLowerCase(): static;

	public function toUpperCase(): static;

	public function capitalizeFirst(): static;

	public function deCapitalizeFirst(): static;

	/**
	 * @param string $delimiter
	 *
	 * @return \Iterator<int, static>
	 */
	public function split( string $delimiter ): \Iterator;

	/**
	 * @param string $delimiter
	 *
	 * @return string[]
	 */
	public function splitNative( string $delimiter ): array;

	public function matchRegularExpression( string|\Stringable $pattern, &$matches, int $flags, int $offset ): bool;

	public function contains( string|\Stringable $needle ): bool;

	public function containsOneOf( string|\Stringable...$values ): bool;

	public function isOneOf( string|\Stringable...$values ): bool;
}
