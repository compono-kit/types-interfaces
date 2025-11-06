<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces;

interface RepresentsBoolean extends RepresentsType
{
	public function toBoolean(): bool;

	public function toInteger(): int;

	public function isTrue(): bool;

	public function isFalse(): bool;
}
