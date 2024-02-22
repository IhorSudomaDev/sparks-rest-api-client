<?php

namespace SparksRestApiClient\Responses\Abstracts;

use JsonException;
use SparksRestApiClient\Exceptions\ResponseJsonNotValidException;

/**
 * Class AResponse
 * @package SparksRestApiClient\Responses\Abstracts
 */
abstract class AResponse
{
	/*** @var mixed */
	protected $result;

	/**
	 * @param $result
	 * @throws ResponseJsonNotValidException
	 */
	public function __construct($result)
	{
		try {
			$this->result = json_decode($result, FALSE, 512, JSON_THROW_ON_ERROR);
		} catch (JsonException $e) {
			throw new ResponseJsonNotValidException();
		}
	}
}