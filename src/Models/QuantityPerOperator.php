<?php

namespace SparksRestApiClient\Models;

/**
 * Class QuantityPerOperator
 * @property int    mnc
 * @property string name
 * @property int    qty
 * @package SparksRestApiClient\Models
 */
class QuantityPerOperator
{
	/*** @return int */
	public function getMnc(): int
	{
		return $this->mnc;
	}

	/*** @return string */
	public function getName(): string
	{
		return $this->name;
	}

	/*** @return int */
	public function getQty(): int
	{
		return $this->qty;
	}
}