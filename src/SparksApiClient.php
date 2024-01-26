<?php

namespace SparksRestApiClient;

use Exception;
use SparksRestApiClient\Requests\Account\ModifyAccountBalanceRequest;
use SparksRestApiClient\Requests\Reseller\GetResellerInfoRequest;
use SparksRestApiClient\Requests\Reseller\ListResellerAccountRequest;
use SparksRestApiClient\Requests\Sim\GetSimProviderStatusRequest;
use SparksRestApiClient\Requests\Sms\SendMtSmsRequest;
use SparksRestApiClient\Requests\Subscriber\ListSubscriberRequest;
use SparksRestApiClient\Requests\Subscriber\ModifySubscriberBalanceRequest;
use SparksRestApiClient\Requests\Subscriber\ModifySubscriberStatusRequest;
use SparksRestApiClient\Requests\Subscriber\SubscriberUsageOverPeriodRequest;

/**
 * Class SparksApiClient
 * @package SparksRestApiClient
 */
class SparksApiClient
{
	/*** @var string */
	private string $apiToken;

	/*** @param string $apiToken */
	public function __construct(string $apiToken)
	{
		$this->setApiToken($apiToken);
	}

	/*** @return string */
	public function getApiToken(): string
	{
		return $this->apiToken;
	}

	/*** @param string $apiToken */
	public function setApiToken(string $apiToken): void
	{
		$this->apiToken = $apiToken;
	}

	/*** @return ListResellerAccountRequest */
	public function listResellerAccount(): ListResellerAccountRequest
	{
		return new ListResellerAccountRequest($this->getApiToken());
	}

	/*** @return ListSubscriberRequest */
	public function listSubscriber(): ListSubscriberRequest
	{
		return new ListSubscriberRequest($this->getApiToken());
	}

	/**
	 * @param int $resellerId
	 * @return GetResellerInfoRequest
	 */
	public function getResellerInfo(int $resellerId): GetResellerInfoRequest
	{
		return new GetResellerInfoRequest($this->apiToken, $resellerId);
	}

	/**
	 * @param string $start
	 * @param string $end
	 * @return SubscriberUsageOverPeriodRequest
	 * @throws Exception
	 */
	public function subscriberUsageOverPeriod(string $start, string $end): SubscriberUsageOverPeriodRequest
	{
		return new SubscriberUsageOverPeriodRequest($this->getApiToken(), $start, $end);
	}

	/**
	 * @param int $eSimId
	 * @return GetSimProviderStatusRequest
	 */
	public function getSimProviderStatus(int $eSimId): GetSimProviderStatusRequest
	{
		return new GetSimProviderStatusRequest($this->getApiToken(), $eSimId);
	}

	/**
	 * @param int   $accountId
	 * @param float $amount
	 * @return ModifyAccountBalanceRequest
	 */
	public function modifyAccountBalance(int $accountId, float $amount): ModifyAccountBalanceRequest
	{
		return new ModifyAccountBalanceRequest($this->getApiToken(), $accountId, $amount);
	}

	/**
	 * @param string $iccid
	 * @param string $newStatus
	 * @return ModifySubscriberStatusRequest
	 */
	public function modifySubscriberStatus(string $iccid, string $newStatus): ModifySubscriberStatusRequest
	{
		return new ModifySubscriberStatusRequest($this->getApiToken(), $iccid, $newStatus);
	}

	/**
	 * @param string $iccid
	 * @param float  $amount
	 * @return ModifySubscriberBalanceRequest
	 */
	public function modifySubscriberBalance(string $iccid, float $amount): ModifySubscriberBalanceRequest
	{
		return new ModifySubscriberBalanceRequest($this->getApiToken(), $iccid, $amount);
	}

	/**
	 * @param string $imsi
	 * @param string $text
	 * @param string $senderId
	 * @return SendMtSmsRequest
	 */
	public function sendMtSms(string $imsi, string $text, string $senderId): SendMtSmsRequest
	{
		return new SendMtSmsRequest($this->getApiToken(), $imsi, $text, $senderId);
	}
}