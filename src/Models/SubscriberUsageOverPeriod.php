<?php

namespace SparksRestApiClient\Models;

/**
 * Class SubscriberUsageOverPeriod
 * @property Total|array total
 * @property Usage[]     usages
 * @package SparksRestApiClient\Models\SubscriberUsage
 */
class SubscriberUsageOverPeriod
{
	/*** @return array|Total */
	public function getTotal()
	{
		return $this->total ?? [];
	}

	/*** @return Usage[] */
	public function getUsages(): ?array
	{
		return $this->usages ?? [];
	}
}