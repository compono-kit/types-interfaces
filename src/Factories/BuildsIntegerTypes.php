<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces\Factories;

use ComponoKit\Types\Interfaces\RepresentsInteger;

interface BuildsIntegerTypes
{
	public function build( int $value ): RepresentsInteger;
}
