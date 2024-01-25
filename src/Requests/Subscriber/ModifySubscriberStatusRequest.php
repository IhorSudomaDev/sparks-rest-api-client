<?php

namespace SparksRestApiClient\Requests\Subscriber;

use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Abstracts\ASingleResponse;

/**
 * Class ModifySubscriberStatusRequest
 * @package SparksRestApiClient\Requests\Subscriber
 */
class ModifySubscriberStatusRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'modifySubscriberStatus';

	/*** @var string */
	protected string $responseClass = ASingleResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	/**
	 * @param string $apiToken
	 * @param string $iccid
	 * @param string $newStatus
	 */
	public function __construct(string $apiToken, string $iccid, string $newStatus)
	{
		parent::__construct($apiToken);
		$this->withSubscriber($iccid);
		$this->withNewStatus($newStatus);
	}

	/**
	 * @param string $iccid
	 * @return void
	 */
	private function withSubscriber(string $iccid): void
	{
		$this->availableInputParameters['subscriber'] = ['iccid' => $iccid];
	}

	/**
	 * @param string $newStatus
	 * @return void
	 */
	private function withNewStatus(string $newStatus): void
	{
		$this->availableInputParameters['newStatus'] = $newStatus;
	}
}