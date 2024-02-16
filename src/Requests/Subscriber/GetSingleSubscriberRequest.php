<?php

namespace SparksRestApiClient\Requests\Subscriber;

use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Subscriber\GetSingleSubscriberResponse;

/**
 * Class GetSingleSubscriberRequest
 * @package SparksRestApiClient\Requests\Subscriber
 */
class GetSingleSubscriberRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'getSingleSubscriber';

	/*** @var string */
	protected string $responseClass = GetSingleSubscriberResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	public function withImsi(string $imsi): self
	{
		$this->availableInputParameters['imsi'] = $imsi;
		return $this;
	}

	/**
	 * @param string $iccid
	 * @return $this
	 */
	public function withIccid(string $iccid): self
	{
		$this->availableInputParameters['iccid'] = $iccid;
		return $this;
	}

	/**
	 * @param string $msisdn
	 * @return $this
	 */
	public function withMsisdn(string $msisdn): self
	{
		$this->availableInputParameters['msisdn'] = $msisdn;
		return $this;
	}

	/**
	 * @param int $subscriberId
	 * @return $this
	 */
	public function withSubscriberId(int $subscriberId): self
	{
		$this->availableInputParameters['subscriberId'] = $subscriberId;
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

	/*** @return $this */
	public function withSimInfo(): self
	{
		$this->availableInputParameters['withSimInfo'] = TRUE;
		return $this;
	}

	/*** @return $this */
	public function withOnlySubsInfo(): self
	{
		$this->availableInputParameters['onlySubsInfo'] = TRUE;
		return $this;
	}
}