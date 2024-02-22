<?php

namespace SparksRestApiClient\Exceptions;

use Exception;

/**
 * Class NotFoundSparksModelException
 * @package SparksRestApiClient\Exceptions
 */
class NotFoundSparksModelException extends Exception
{

	/*** @param string $model */
	public function __construct(string $model)
	{
		parent::__construct('Not Found Sparks (' . $model . ' (s) )');
	}
}