<?php

namespace SparksRestApiClient\Exceptions;

use Exception;

/**
 * Class AuthorizationException
 * @package SparksRestApiClient\Exceptions
 */
class AuthorizationException extends Exception
{
	/*** @var string */
	protected $message = 'Authorization was failed';

}