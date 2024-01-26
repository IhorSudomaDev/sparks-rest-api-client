<?php

namespace SparksRestApiClient\Requests\Reseller;

use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Reseller\ListResellerAccountResponse;

/**
 * Class ListResellerAccountRequest
 * @package SparksRestApiClient\Requests\Reseller
 */
class ListResellerAccountRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'listResellerAccount';

	/*** @var string */
	protected string $responseClass = ListResellerAccountResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	/**
	 * @param int $resellerId
	 * @return $this
	 */
	public function withResellerId(int $resellerId): self
	{
		$this->availableInputParameters['resellerId'] = $resellerId;
		return $this;
	}
}