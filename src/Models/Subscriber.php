<?php

namespace SparksRestApiClient\Models;

/**
 * Class Subscriber
 * @property ImsiList        imsiList
 * @property PhoneNumberList phoneNumberList
 * @property MultiImsi       multiImsi
 * @property array           status
 * @property Sim             sim
 * @property int             subscriberId
 * @property string          batchId
 * @property string|NULL     subscriberName
 * @property int             accountId
 * @property int             resellerId
 * @property bool            prepaid
 * @property float           balance
 * @property string          activationDate
 * @property string|NULL     lastUsageDate
 * @property string|NULL     email
 * @property bool            useAccountForCharging
 * @property bool            allowedMoc
 * @property bool            allowedMtc
 * @property bool            allowedData
 * @property bool            allowedMosms
 * @property bool            allowedMtsms
 * @property string          account
 * @property string          reseller
 * @property int|NULL        lastMcc
 * @property int|NULL        lastMnc
 * @package SparksRestApiClient\Models
 */
class Subscriber
{
	/*** @return ImsiList */
	public function getImsiList(): ImsiList
	{
		return $this->imsiList[0];
	}

	/*** @return PhoneNumberList */
	public function getPhoneNumberList(): PhoneNumberList
	{
		return $this->phoneNumberList[0];
	}

	/*** @return MultiImsi */
	public function getMultiImsi(): MultiImsi
	{
		return $this->multiImsi[0];
	}

	/*** @return Status */
	public function getStatus(): Status
	{
		return array_pop($this->status);
	}

	/*** @return Sim */
	public function getSim(): Sim
	{
		return $this->sim;
	}

	/*** @return int */
	public function getSubscriberId(): int
	{
		return $this->subscriberId;
	}

	/*** @return string */
	public function getBatchId(): string
	{
		return $this->batchId;
	}

	/*** @return string|NULL */
	public function getSubscriberName(): ?string
	{
		return $this->subscriberName ?? NULL;
	}

	/*** @return int */
	public function getAccountId(): int
	{
		return $this->accountId;
	}

	/*** @return int */
	public function getResellerId(): int
	{
		return $this->resellerId;
	}

	/*** @return bool */
	public function isPrepaid(): bool
	{
		return $this->prepaid;
	}

	/*** @return float */
	public function getBalance(): float
	{
		return $this->balance;
	}

	/*** @return string */
	public function getActivationDate(): string
	{
		return $this->activationDate;
	}

	/*** @return string|NULL */
	public function getLastUsageDate(): ?string
	{
		return $this->lastUsageDate ?? NULL;
	}

	/*** @return string|NULL */
	public function getEmail(): ?string
	{
		return $this->email ?? NULL;
	}

	/*** @return bool */
	public function isUseAccountForCharging(): bool
	{
		return $this->useAccountForCharging;
	}

	/*** @return bool */
	public function isAllowedMoc(): bool
	{
		return $this->allowedMoc;
	}

	/*** @return bool */
	public function isAllowedMtc(): bool
	{
		return $this->allowedMtc;
	}

	/*** @return bool */
	public function isAllowedData(): bool
	{
		return $this->allowedData;
	}

	/*** @return bool */
	public function isAllowedMosms(): bool
	{
		return $this->allowedMosms;
	}

	/*** @return bool */
	public function isAllowedMtsms(): bool
	{
		return $this->allowedMtsms;
	}

	/*** @return string */
	public function getAccount(): string
	{
		return $this->account;
	}

	/*** @return string */
	public function getReseller(): string
	{
		return $this->reseller;
	}

	/*** @return int|NULL */
	public function getLastMcc(): ?int
	{
		return $this->lastMcc ?? NULL;
	}

	/*** @return int|NULL */
	public function getLastMnc(): ?int
	{
		return $this->lastMnc ?? NULL;
	}

	/*** @return string */
	public function getImsi(): string
	{
		return $this->getImsiList()->getImsi();
	}

	/*** @return string */
	public function getMsisdn(): string
	{
		return $this->getPhoneNumberList()->getPhoneNumber();
	}

	/*** @return string */
	public function getPin1(): string
	{
		return $this->getSim()->getPin1();
	}

	/*** @return string */
	public function getPin2(): string
	{
		return $this->getSim()->getPin2();
	}

	/*** @return string */
	public function getPuk1(): string
	{
		return $this->getSim()->getPuk1();
	}

	/*** @return string */
	public function getPuk2(): string
	{
		return $this->getSim()->getPuk2();
	}

	/*** @return string */
	public function getProviderStatus(): string
	{
		return $this->getStatus()->getStatus();
	}
}