<?php

namespace SparksRestApiClient\Models\SubscriberUsage;

/**
 * Class Total
 * @property float              resellerCost
 * @property float              subscriberCost
 * @property array              quantityPerType
 * @property QuantityPerCountry quantityPerCountry
 * @package SparksRestApiClient\Models\SubscriberUsage
 */
class Total
{
	/*** @return float */
	public function getResellerCost(): float
	{
		return $this->resellerCost;
	}

	/*** @param float $resellerCost */
	public function setResellerCost(float $resellerCost): void
	{
		$this->resellerCost = $resellerCost;
	}

	/*** @return float */
	public function getSubscriberCost(): float
	{
		return $this->subscriberCost;
	}

	/*** @param float $subscriberCost */
	public function setSubscriberCost(float $subscriberCost): void
	{
		$this->subscriberCost = $subscriberCost;
	}

	/*** @return array */
	public function getQuantityPerType(): array
	{
		return $this->quantityPerType;
	}

	/*** @param array $quantityPerType */
	public function setQuantityPerType(array $quantityPerType): void
	{
		$this->quantityPerType = $quantityPerType;
	}

	/*** @return QuantityPerCountry */
	public function getQuantityPerCountry(): QuantityPerCountry
	{
		return $this->quantityPerCountry;
	}

	/*** @param QuantityPerCountry $quantityPerCountry */
	public function setQuantityPerCountry(QuantityPerCountry $quantityPerCountry): void
	{
		$this->quantityPerCountry = $quantityPerCountry;
	}
}