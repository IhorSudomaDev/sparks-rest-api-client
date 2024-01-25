<?php

namespace SparksRestApiClient\Responses\Abstracts;

/**
 * Class AResponse
 * @package SparksRestApiClient\Responses\Abstracts
 */
abstract class AResponse
{
	/**
	 * @param $result
	 * @return mixed
	 */
	abstract public function get($result);
}