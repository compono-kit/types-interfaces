<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces\Factories;

use ComponoKit\Types\Interfaces\RepresentsBoolean;

interface BuildsBooleanTypes
{
	public function build( bool $value ): RepresentsBoolean;
}
