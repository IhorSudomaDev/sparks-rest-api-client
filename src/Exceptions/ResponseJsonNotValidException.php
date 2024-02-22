<?php

namespace SparksRestApiClient\Exceptions;

use Exception;

/**
 * Class ResponseJsonNotValidException
 * @package SparksRestApiClient\Exceptions
 */
class ResponseJsonNotValidException extends Exception
{

	public function __construct()
	{
		parent::__construct('Response JSON not valid');
	}
}