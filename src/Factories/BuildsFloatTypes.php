<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces\Factories;

use ComponoKit\Types\Interfaces\RepresentsFloat;

interface BuildsFloatTypes
{
	public function build( float $value ): RepresentsFloat;
}
