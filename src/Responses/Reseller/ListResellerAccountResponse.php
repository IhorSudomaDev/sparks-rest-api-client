<?php

namespace SparksRestApiClient\Responses\Reseller;

use SparksRestApiClient\Models\Account;
use SparksRestApiClient\Responses\Abstracts\AListResponse;
use SparksRestApiClient\ValueObjects\ModelFactory;

/**
 * Class ListResellerAccountResponse
 * @package SparksRestApiClient\Responses\Reseller
 */
class ListResellerAccountResponse extends AListResponse
{
	public function getList(): array
	{
		$list = [];
		foreach ($this->result->listResellerAccount->reseller[0]->account as $data) {
			$list[] = ModelFactory::create(new Account(), $data);
		}
		return $list;
	}
}