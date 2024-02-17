<?php

namespace SparksRestApiClient\Models;

/**
 * Class Account
 * @property int    id
 * @property string name
 * @property float  balance
 * @property bool   packageOnly
 * @property int    steeringListId
 * @package SparksRestApiClient\Models
 */
class Account
{
	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

	/*** @return string */
	public function getName(): string
	{
		return $this->name;
	}

	/*** @return float */
	public function getBalance(): float
	{
		return $this->balance;
	}

	/*** @return bool */
	public function isPackageOnly(): bool
	{
		return $this->packageOnly;
	}

	/*** @return int */
	public function getSteeringListId(): int
	{
		return $this->steeringListId;
	}
}