<?php

namespace SparksRestApiClient\Models;

/**
 * Class MultiImsi
 * @property int    id
 * @property int    subscriberId
 * @property string imsi
 * @property string startDate
 * @package SparksRestApiClient\Models
 */
class MultiImsi
{
	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

	/*** @param int $id */
	public function setId(int $id): void
	{
		$this->id = $id;
	}

	/*** @return int */
	public function getSubscriberId(): int
	{
		return $this->subscriberId;
	}

	/*** @param int $subscriberId */
	public function setSubscriberId(int $subscriberId): void
	{
		$this->subscriberId = $subscriberId;
	}

	/*** @return string */
	public function getImsi(): string
	{
		return $this->imsi;
	}

	/*** @param string $imsi */
	public function setImsi(string $imsi): void
	{
		$this->imsi = $imsi;
	}

	/*** @return string */
	public function getStartDate(): string
	{
		return $this->startDate;
	}

	/*** @param string $startDate */
	public function setStartDate(string $startDate): void
	{
		$this->startDate = $startDate;
	}
}