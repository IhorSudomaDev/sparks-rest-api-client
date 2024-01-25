<?php

namespace SparksRestApiClient\Responses\Abstracts;

/**
 * Class ASingleResponse
 * @package SparksRestApiClient\Responses\Abstracts
 */
abstract class ASingleResponse extends AResponse
{
	/**
	 * @param $result
	 * @return array
	 */
	public function get($result): array
	{
		$list = [];
		if ( ! empty($result)) {
			$list = (array) $result;
		}
		return $list;
	}
}