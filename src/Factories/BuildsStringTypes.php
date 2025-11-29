<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces\Factories;

use ComponoKit\Types\Interfaces\RepresentsString;

interface BuildsStringTypes
{
	public function build( string $value ): RepresentsString;
}
