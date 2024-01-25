<?php

namespace SparksRestApiClient\Models\SubscriberUsage;

/**
 * Class QuantityPerOperator
 * @property int    mnc
 * @property string name
 * @property int    qty
 * @package SparksRestApiClient\Models\SubscriberUsage
 */
class QuantityPerOperator
{
	/*** @return int */
	public function getMnc(): int
	{
		return $this->mnc;
	}

	/*** @param int $mnc */
	public function setMnc(int $mnc): void
	{
		$this->mnc = $mnc;
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
}