<?php

namespace SparksRestApiClient\Models;

/**
 * Class SubsPeriodUsage
 * @property string           day
 * @property Total|NULL       total
 * @property SubsDailyUsage[] subsDailyUsages
 * @package SparksRestApiClient\Models
 */
class SubsPeriodUsage
{
	/*** @return string */
	public function getDay(): string
	{
		return $this->day;
	}

	/*** @return Total|NULL */
	public function getTotal(): ?Total
	{
		return $this->total ?? NULL;
	}

	/*** @return SubsDailyUsage[] */
	public function getSubsDailyUsages(): array
	{
		return $this->subsDailyUsages;
	}

	/*** @return string */
	public function getImei(): string
	{
		return current($this->getSubsDailyUsages())->getImei();
	}

	/*** @return string */
	public function getCountryCode(): string
	{
		return current($this->getSubsDailyUsages())->getCountryAlpha2();
	}

	/*** @return string */
	public function getOperator(): string
	{
		return current($this->getSubsDailyUsages())->getOperator();
	}

	/*** @return string */
	public function getApn(): string
	{
		return current($this->getSubsDailyUsages())->getApn();
	}
}