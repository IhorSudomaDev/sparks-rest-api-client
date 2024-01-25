<?php

namespace SparksRestApiClient\Requests\Subscriber;

use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Subscriber\ListSubscriberResponse;

/**
 * Class ListSubscriberRequest
 * @package SparksRestApiClient\Requests\Subscriber
 */
class ListSubscriberRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'listSubscriber';

	/*** @var string */
	protected string $responseClass = ListSubscriberResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	/**
	 * @param string $imsiPrefix
	 * @return $this
	 */
	public function withImsiPrefix(string $imsiPrefix): self
	{
		$this->availableInputParameters['imsiPrefix'] = $imsiPrefix;
		return $this;
	}

	/**
	 * @param $iccidPrefix
	 * @return $this
	 */
	public function withIccidPrefix($iccidPrefix): self
	{
		$this->availableInputParameters['iccidPrefix'] = $iccidPrefix;
		return $this;
	}

	/**
	 * @param int $accountId
	 * @return $this
	 */
	public function withAccountId(int $accountId): self
	{
		$this->availableInputParameters['accountId'] = $accountId;
		return $this;
	}

	/**
	 * @param string $activationCode
	 * @return $this
	 */
	public function withActivationCode(string $activationCode): self
	{
		$this->availableInputParameters['activationCode'] = $activationCode;
		return $this;
	}
}