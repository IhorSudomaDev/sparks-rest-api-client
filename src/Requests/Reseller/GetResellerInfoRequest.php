<?php

namespace SparksRestApiClient\Requests\Reseller;

use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Reseller\GetResellerInfoResponse;

/**
 * Class GetResellerInfoRequest
 * @package SparksRestApiClient\Requests\Reseller
 */
class GetResellerInfoRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'getResellerInfo';

	/*** @var string */
	protected string $responseClass = GetResellerInfoResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	/**
	 * @param string $apiToken
	 * @param int    $resellerId
	 */
	public function __construct(string $apiToken, int $resellerId)
	{
		parent::__construct($apiToken);
		$this->withResellerId($resellerId);
	}

	/**
	 * @param int $resellerId
	 * @return void
	 */
	private function withResellerId(int $resellerId): void
	{
		$this->availableInputParameters['id'] = $resellerId;
	}
}