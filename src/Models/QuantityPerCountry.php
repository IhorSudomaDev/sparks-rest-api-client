<?php

namespace SparksRestApiClient\Models;

/**
 * Class QuantityPerCountry
 * @property int                   mcc
 * @property string                name
 * @property string                alpha2
 * @property int                   qty
 * @property QuantityPerOperator[] quantityPerOperator
 * @package SparksRestApiClient\Models
 */
class QuantityPerCountry
{
	/*** @return int */
	public function getMcc(): int
	{
		return $this->mcc;
	}

	/*** @return string */
	public function getName(): string
	{
		return $this->name;
	}

	/*** @return string */
	public function getAlpha2(): string
	{
		return $this->alpha2;
	}

	/*** @return int */
	public function getQty(): int
	{
		return $this->qty;
	}

	/*** @return QuantityPerOperator[] */
	public function getQuantityPerOperator(): array
	{
		return $this->quantityPerOperator;
	}
}