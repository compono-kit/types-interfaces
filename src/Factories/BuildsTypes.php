<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces\Factories;

use ComponoKit\Types\Interfaces\RepresentsType;

interface BuildsTypes
{
	public function build( float|int|string|bool|array $value ): RepresentsType;
}
