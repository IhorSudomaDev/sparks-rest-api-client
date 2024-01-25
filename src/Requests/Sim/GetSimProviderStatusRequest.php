<?php

namespace SparksRestApiClient\Requests\Sim;

use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Sim\GetSimProviderStatusResponse;

/**
 * Class GetSimProviderStatusRequest
 * @package SparksRestApiClient\Requests\Sim
 */
class GetSimProviderStatusRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'getSimProviderStatus';

	/*** @var string */
	protected string $responseClass = GetSimProviderStatusResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	/**
	 * @param string $apiToken
	 * @param int    $eSimId
	 */
	public function __construct(string $apiToken, int $eSimId)
	{
		parent::__construct($apiToken);
		$this->withESimId($eSimId);
	}

	/**
	 * @param int $eSimId
	 * @return void
	 */
	private function withESimId(int $eSimId): void
	{
		$this->availableInputParameters['mainParameter'] = $eSimId;
	}
}