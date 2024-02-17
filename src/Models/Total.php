<?php

namespace SparksRestApiClient\Models;

use SparksRestApiClient\ValueObjects\UsageType;

/**
 * Class Total
 * @property float                cost
 * @property float                parentResellerCost
 * @property float                resellerCost
 * @property float                subscriberCost
 * @property array                quantityPerType
 * @property QuantityPerCountry[] quantityPerCountry
 * @package SparksRestApiClient\Models
 */
class Total
{
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

	/*** @return float */
	public function getSubscriberCost(): float
	{
		return $this->subscriberCost;
	}

	/*** @return array */
	public function getQuantityPerType(): array
	{
		if (isset($this->quantityPerType)) {
			return (array) $this->quantityPerType;
		}
		return [];
	}

	/*** @return QuantityPerCountry[] */
	public function getQuantityPerCountry(): array
	{
		return $this->quantityPerCountry ?? [];
	}

	/*** @return int */
	public function getQuantityPerTypeData(): int
	{
		return $this->getQuantityPerType()[UsageType::DATA] ?? 0;
	}
}