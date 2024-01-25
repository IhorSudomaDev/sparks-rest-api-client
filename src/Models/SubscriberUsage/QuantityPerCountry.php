<?php

namespace SparksRestApiClient\Models\SubscriberUsage;

/**
 * Class QuantityPerCountry
 * @property int                 mcc
 * @property string              name
 * @property string              alpha2
 * @property int                 qty
 * @property QuantityPerOperator quantityPerOperator
 * @package SparksRestApiClient\Models\SubscriberUsage
 */
class QuantityPerCountry
{
	/*** @return int */
	public function getMcc(): int
	{
		return $this->mcc;
	}

	/*** @param int $mcc */
	public function setMcc(int $mcc): void
	{
		$this->mcc = $mcc;
	}

	/*** @return string */
	public function getName(): string
	{
		return $this->name;
	}

	/*** @param string $name */
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	/*** @return string */
	public function getAlpha2(): string
	{
		return $this->alpha2;
	}

	/*** @param string $alpha2 */
	public function setAlpha2(string $alpha2): void
	{
		$this->alpha2 = $alpha2;
	}

	/*** @return int */
	public function getQty(): int
	{
		return $this->qty;
	}

	/*** @param int $qty */
	public function setQty(int $qty): void
	{
		$this->qty = $qty;
	}

	/*** @return QuantityPerOperator */
	public function getQuantityPerOperator(): QuantityPerOperator
	{
		return $this->quantityPerOperator;
	}

	/*** @param QuantityPerOperator $quantityPerOperator */
	public function setQuantityPerOperator(QuantityPerOperator $quantityPerOperator): void
	{
		$this->quantityPerOperator = $quantityPerOperator;
	}
}