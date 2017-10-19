<?php

namespace AppBundle;


class Manager
{
	
	private $transformers;

	public function __construct(array $transformers)
	{
		$this->transformers = $transformers;
	}
}