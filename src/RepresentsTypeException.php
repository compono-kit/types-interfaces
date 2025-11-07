<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces;

interface RepresentsTypeException extends \Throwable
{
	public function getContext(): array;
}
