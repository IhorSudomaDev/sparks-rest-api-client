<?php

namespace SparksRestApiClient\Models;

/**
 * Class Usage
 * @property int                    subscriberId
 * @property Total|NULL             total
 * @property SubsPeriodUsage[]|NULL subsPeriodUsages
 * @package SparksRestApiClient\Models
 */
class Usage
{
	/*** @return int */
	public function getSubscriberId(): int
	{
		return $this->subscriberId;
	}

	/*** @return Total|NULL */
	public function getTotal(): ?Total
	{
		return $this->total ?? NULL;
	}

	/*** @return SubsPeriodUsage[]|NULL */
	public function getSubsPeriodUsages(): ?array
	{
		return $this->subsPeriodUsages ?? NULL;
	}
}