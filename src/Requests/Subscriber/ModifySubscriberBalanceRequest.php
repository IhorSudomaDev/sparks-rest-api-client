<?php

namespace SparksRestApiClient\Requests\Subscriber;

use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Subscriber\ModifySubscriberBalanceResponse;

/**
 * Class ModifySubscriberBalanceRequest
 * @package SparksRestApiClient\Requests\Subscriber
 */
class ModifySubscriberBalanceRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'modifySubscriberBalance';

	/*** @var string */
	protected string $responseClass = ModifySubscriberBalanceResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	/**
	 * @param string $apiToken
	 * @param string $iccid
	 * @param float  $amount
	 */
	public function __construct(string $apiToken, string $iccid, float $amount)
	{
		parent::__construct($apiToken);
		$this->withSubscriber($iccid);
		$this->withAmount($amount);
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
	 * @param float $amount
	 * @return void
	 */
	private function withAmount(float $amount): void
	{
		$this->availableInputParameters['amount'] = $amount;
	}

	/**
	 * @param string $description
	 * @return $this
	 */
	public function withDescription(string $description): self
	{
		$this->availableInputParameters['description'] = $description;
		return $this;
	}

	/*** @return $this */
	public function withSetBalance(): self
	{
		$this->availableInputParameters['setBalance'] = TRUE;
		return $this;
	}
}