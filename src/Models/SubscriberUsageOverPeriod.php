<?php

namespace SparksRestApiClient\Models;

/**
 * Class SubscriberUsageOverPeriod
 * @property Total|NULL   total
 * @property Usage[]|NULL usages
 * @package SparksRestApiClient\Models\SubscriberUsage
 */
class SubscriberUsageOverPeriod
{
	/*** @return Total|null */
	public function getTotal(): ?Total
	{
		return $this->total ?? NULL;
	}

	/*** @return Usage[]|null */
	public function getUsages(): ?array
	{
		return $this->usages ?? NULL;
	}
}