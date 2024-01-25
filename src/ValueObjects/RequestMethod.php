<?php

namespace SparksRestApiClient\ValueObjects;

/**
 * Class RequestMethod
 * @package SparksRestApiClient\ValueObjects
 */
class RequestMethod
{
	/** @var string */
	public const POST = 'POST';
	/** @var string */
	public const GET = 'GET';
	/** @var string */
	public const PUT = 'PUT';
	/** @var string */
	public const DELETE = 'DELETE';
}