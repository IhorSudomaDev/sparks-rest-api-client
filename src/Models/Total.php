<?php

namespace SparksRestApiClient\Models;

use SparksRestApiClient\ValueObjects\UsageType;
use stdClass;

/**
 * Class Total
 * @property float                   cost
 * @property float                   parentResellerCost
 * @property float                   resellerCost
 * @property float                   subscriberCost
 * @property stdClass|NULL           quantityPerType
 * @property QuantityPerCountry|NULL quantityPerCountry
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

	/*** @return int|NULL */
	public function getQuantityPerType(): ?int
	{
		$type = UsageType::DATA;
		return $this->quantityPerType->$type ?? NULL;
	}

	/*** @return QuantityPerCountry|NULL */
	public function getQuantityPerCountry(): ?QuantityPerCountry
	{
		return $this->quantityPerCountry[0] ?? NULL;
	}
}