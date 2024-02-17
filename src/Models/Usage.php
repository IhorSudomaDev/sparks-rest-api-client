<?php

namespace SparksRestApiClient\Models;

/**
 * Class Usage
 * @property int                    subscriberId
 * @property Total|array         total
 * @property SubsPeriodUsage[] subsPeriodUsages
 * @package SparksRestApiClient\Models
 */
class Usage
{
	/*** @return int */
	public function getSubscriberId(): int
	{
		return $this->subscriberId;
	}

	/*** @return array|Total */
	public function getTotal()
	{
		return $this->total ?? [];
	}

	/*** @return SubsPeriodUsage[] */
	public function getSubsPeriodUsages(): array
	{
		return $this->subsPeriodUsages ?? [];
	}
}