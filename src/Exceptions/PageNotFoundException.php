<?php

namespace SparksRestApiClient\Exceptions;

use Exception;

/**
 * Class PageNotFoundException
 * @package SparksRestApiClient\Exceptions
 */
class PageNotFoundException extends Exception
{
	/*** @var string */
	protected $message = 'Page Not Found';
}