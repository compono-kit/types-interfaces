<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces;

interface RepresentsType extends \JsonSerializable
{
	public function equals( RepresentsType $type ): bool;

	public function toNativeType(): int|float|string|bool|array;
}
