<?php

namespace SparksRestApiClient\Models;

/**
 * Class SubsPeriodUsage
 * @property string           day
 * @property Total|array      total
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

	/*** @return array|Total */
	public function getTotal()
	{
		return $this->total ?? [];
	}

	/*** @return SubsDailyUsage[] */
	public function getSubsDailyUsages(): array
	{
		return $this->subsDailyUsages ?? [];
	}

	/* ADDITIONAL CHILD METHODS */
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