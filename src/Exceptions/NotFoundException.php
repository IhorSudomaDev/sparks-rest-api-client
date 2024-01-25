<?php

namespace SparksRestApiClient\Exceptions;

use Exception;

/**
 * Class NotFoundException
 * @package SparksRestApiClient\Exceptions
 */
class NotFoundException extends Exception
{

	/*** @param string $model */
	public function __construct(string $model)
	{
		parent::__construct('Not Found (' . $model . ')');
	}
}