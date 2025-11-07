<?php declare(strict_types=1);

namespace ComponoKit\Types\Interfaces\Traits;

trait ProvidingContext
{
	private array $context = [];

	public function setContext( array $context ): self
	{
		$this->context = $context;

		return $this;
	}

	public function getContext(): array
	{
		return $this->context;
	}
}
