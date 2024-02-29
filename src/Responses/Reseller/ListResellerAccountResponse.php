<?php

namespace SparksRestApiClient\Responses\Reseller;

use SparksRestApiClient\Models\Reseller;
use SparksRestApiClient\Responses\Abstracts\AListResponse;
use SparksRestApiClient\ValueObjects\ModelFactory;

/**
 * Class ListResellerAccountResponse
 * @package SparksRestApiClient\Responses\Reseller
 */
class ListResellerAccountResponse extends AListResponse
{
	/*** @return array */
	public function getList(): array
	{
		$list = [];
		foreach ($this->result->listResellerAccount->reseller as $data) {
			$list[] = ModelFactory::create(new Reseller(), $data);
		}
		return $list;
	}
}