<?php

namespace SparksRestApiClient\Exceptions;

use Exception;

/**
 * Class ForbiddenException
 * @package SparksRestApiClient\Exceptions
 */
class ForbiddenException extends Exception
{

	/*** @var string */
	protected $message = 'Forbidden (403)';

}