<?php

namespace SparksRestApiClient\Models;

/**
 * Class Template
 * @property Sponsors         sponsors
 * @property Reseller         reseller
 * @property RdbLocationZones rdbLocationZones
 * @property int              prepaidpackagetemplateid
 * @property string           prepaidpackagetemplatename
 * @property int              resellerid
 * @property int              priority
 * @property int              locationzoneid
 * @property int              databyte
 * @property int              perioddays
 * @property bool             deleted
 * @property int              esimSponsor
 * @property float            cost
 * @property string           uiStartAvailablePeriod
 * @property string           uiEndAvailibilityPeriod
 * @property bool             uiVisible
 * @property bool             throttlingActive
 * @property int              throttlingErrorAction
 * @property bool             recurring
 * @property bool             reportUnitsPreviousPackage
 * @property string           userUiName
 * @package SparksRestApiClient\Models
 */
class Template
{
	/*** @return Sponsors */
	public function getSponsors(): Sponsors
	{
		return $this->sponsors;
	}

	/*** @return Reseller */
	public function getReseller(): Reseller
	{
		return $this->reseller;
	}

	/*** @return RdbLocationZones */
	public function getRdbLocationZones(): RdbLocationZones
	{
		return $this->rdbLocationZones;
	}

	/*** @return int */
	public function getPrepaidpackagetemplateid(): int
	{
		return $this->prepaidpackagetemplateid;
	}

	/*** @return string */
	public function getPrepaidpackagetemplatename(): string
	{
		return $this->prepaidpackagetemplatename;
	}

	/*** @return int */
	public function getResellerid(): int
	{
		return $this->resellerid;
	}

	/*** @return int */
	public function getPriority(): int
	{
		return $this->priority;
	}

	/*** @return int */
	public function getLocationzoneid(): int
	{
		return $this->locationzoneid;
	}

	/*** @return int */
	public function getDatabyte(): int
	{
		return $this->databyte;
	}

	/*** @return int */
	public function getPerioddays(): int
	{
		return $this->perioddays;
	}

	/*** @return bool */
	public function isDeleted(): bool
	{
		return $this->deleted;
	}

	/*** @return int */
	public function getEsimSponsor(): int
	{
		return $this->esimSponsor;
	}

	/*** @return float */
	public function getCost(): float
	{
		return $this->cost;
	}

	/*** @return string */
	public function getUiStartAvailablePeriod(): string
	{
		return $this->uiStartAvailablePeriod;
	}

	/*** @return string */
	public function getUiEndAvailibilityPeriod(): string
	{
		return $this->uiEndAvailibilityPeriod;
	}

	/*** @return bool */
	public function isUiVisible(): bool
	{
		return $this->uiVisible;
	}

	/*** @return bool */
	public function isThrottlingActive(): bool
	{
		return $this->throttlingActive;
	}

	/*** @return int */
	public function getThrottlingErrorAction(): int
	{
		return $this->throttlingErrorAction;
	}

	/*** @return bool */
	public function isRecurring(): bool
	{
		return $this->recurring;
	}

	/*** @return bool */
	public function isReportUnitsPreviousPackage(): bool
	{
		return $this->reportUnitsPreviousPackage;
	}

	/*** @return string */
	public function getUserUiName(): string
	{
		return $this->userUiName;
	}
}