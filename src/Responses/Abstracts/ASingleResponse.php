<?php

namespace SparksRestApiClient\Responses\Abstracts;

use RuntimeException;

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
		if ($result->status->code === 6) {
			throw new RuntimeException($result->status->msg);
		}
		$list = [];
		if ( ! empty($result)) {
			$list = (array) $result;
		}
		return $list;
	}
}