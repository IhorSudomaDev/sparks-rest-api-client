<?php

namespace SparksRestApiClient\Models;

/**
 * Class SubsDailyUsage
 * @property int    subscriberId
 * @property string sessionId
 * @property string usageDateUtc
 * @property int    usageType
 * @property int    accountId
 * @property string accountName
 * @property int    resellerId
 * @property string resellerName
 * @property int    mcc
 * @property string country
 * @property string countryAlpha2
 * @property string operator
 * @property int    mnc
 * @property int    quantity
 * @property float  cost
 * @property float  parentResellerCost
 * @property float  resellerCost
 * @property int    resellerPlanId
 * @property int    resellerCurrencyId
 * @property float  resellerConvertRate
 * @property int    resellerPrepaidPackageQty
 * @property float  subscriberCost
 * @property int    subscriberPrepaidPackageId
 * @property int    subscriberPrepaidPackageQty
 * @property int    lac
 * @property string cellId
 * @property string rat
 * @property string imei
 * @property string upBitrate
 * @property string downBitrate
 * @property int    qci
 * @property string apn
 * @property string imsiPrefix
 * @property string sponsorImsi
 * @property string ratingGroup
 * @package SparksRestApiClient\Models
 */
class SubsDailyUsage
{
	/*** @return int */
	public function getSubscriberId(): int
	{
		return $this->subscriberId;
	}

	/*** @return string */
	public function getSessionId(): string
	{
		return $this->sessionId;
	}

	/*** @return string */
	public function getUsageDateUtc(): string
	{
		return $this->usageDateUtc;
	}

	/*** @return int */
	public function getUsageType(): int
	{
		return $this->usageType;
	}

	/*** @return int */
	public function getAccountId(): int
	{
		return $this->accountId;
	}

	/*** @return string */
	public function getAccountName(): string
	{
		return $this->accountName;
	}

	/*** @return int */
	public function getResellerId(): int
	{
		return $this->resellerId;
	}

	/*** @return string */
	public function getResellerName(): string
	{
		return $this->resellerName;
	}

	/*** @return int */
	public function getMcc(): int
	{
		return $this->mcc;
	}

	/*** @return string */
	public function getCountry(): string
	{
		return $this->country;
	}

	/*** @return string */
	public function getCountryAlpha2(): string
	{
		return $this->countryAlpha2;
	}

	/*** @return string */
	public function getOperator(): string
	{
		return $this->operator;
	}

	/*** @return int */
	public function getMnc(): int
	{
		return $this->mnc;
	}

	/*** @return int */
	public function getQuantity(): int
	{
		return $this->quantity;
	}

	/*** @return float */
	public function getCost(): float
	{
		return $this->cost;
	}

	/*** @return float */
	public function getParentResellerCost(): float
	{
		return $this->parentResellerCost;
	}

	/*** @return float */
	public function getResellerCost(): float
	{
		return $this->resellerCost;
	}

	/*** @return int */
	public function getResellerPlanId(): int
	{
		return $this->resellerPlanId;
	}

	/*** @return int */
	public function getResellerCurrencyId(): int
	{
		return $this->resellerCurrencyId;
	}

	/*** @return float */
	public function getResellerConvertRate(): float
	{
		return $this->resellerConvertRate;
	}

	/*** @return int */
	public function getResellerPrepaidPackageQty(): int
	{
		return $this->resellerPrepaidPackageQty;
	}

	/*** @return float */
	public function getSubscriberCost(): float
	{
		return $this->subscriberCost;
	}

	/*** @return int */
	public function getSubscriberPrepaidPackageId(): int
	{
		return $this->subscriberPrepaidPackageId;
	}

	/*** @return int */
	public function getSubscriberPrepaidPackageQty(): int
	{
		return $this->subscriberPrepaidPackageQty;
	}

	/*** @return int */
	public function getLac(): int
	{
		return $this->lac;
	}

	/*** @return string */
	public function getCellId(): string
	{
		return $this->cellId;
	}

	/*** @return string */
	public function getRat(): string
	{
		return $this->rat;
	}

	/*** @return string */
	public function getImei(): string
	{
		return $this->imei;
	}

	/*** @return string */
	public function getUpBitrate(): string
	{
		return $this->upBitrate;
	}

	/*** @return string */
	public function getDownBitrate(): string
	{
		return $this->downBitrate;
	}

	/*** @return int */
	public function getQci(): int
	{
		return $this->qci;
	}

	/*** @return string */
	public function getApn(): string
	{
		return $this->apn;
	}

	/*** @return string */
	public function getImsiPrefix(): string
	{
		return $this->imsiPrefix;
	}

	/*** @return string */
	public function getSponsorImsi(): string
	{
		return $this->sponsorImsi;
	}

	/*** @return string */
	public function getRatingGroup(): string
	{
		return $this->ratingGroup;
	}
}