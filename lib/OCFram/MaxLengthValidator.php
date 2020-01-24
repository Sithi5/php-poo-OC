<?php

namespace OCFram;

class MaxLengthValidator extends Validator
{
	protected $maxLength;

	public function __construct($errorMessage, $maxLength)
	{
		parent::__construct($errorMessage);
		$this->maxLength = $maxLength;
	}
	public function isValid($value)
	{
		return (bool)$value <= $maxLength ? 1 : 0;
	}

	public function setMaxLength($maxLength)
	{
		$maxLength = (int) $maxLength;

		if ($maxLength > 0)
		{
			$this->maxLength = $maxLength;
		}
		else
		{
			throw new \RuntimeException('La longueur maximale doit etre un nombre superieur a 0');
		}
	}
}