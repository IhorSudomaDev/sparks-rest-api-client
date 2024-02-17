<?php

namespace SparksRestApiClient\Requests\Account;

use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Account\ModifyAccountBalanceResponse;

/**
 * Class ModifyAccountBalanceRequest
 * @package SparksRestApiClient\Requests\Account
 */
class ModifyAccountBalanceRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'modifyAccountBalance';

	/*** @var string */
	protected string $responseClass = ModifyAccountBalanceResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	/**
	 * @param string $apiToken
	 * @param int    $accountId
	 * @param float  $amount
	 */
	public function __construct(string $apiToken, int $accountId, float $amount)
	{
		parent::__construct($apiToken);
		$this->withAccountId($accountId);
		$this->withAmount($amount);
	}

	/**
	 * @param int $accountId
	 * @return void
	 */
	private function withAccountId(int $accountId): void
	{
		$this->availableInputParameters['accountId'] = $accountId;
	}

	/**
	 * @param string $amount
	 * @return void
	 */
	private function withAmount(string $amount): void
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