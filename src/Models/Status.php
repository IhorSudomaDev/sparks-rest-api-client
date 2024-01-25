<?php

namespace SparksRestApiClient\Models;

/**
 * Class Status
 * @property int    id
 * @property int    subscriberId
 * @property string startDate
 * @property string status
 * @package SparksRestApiClient\Models
 */
class Status
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
	public function getStartDate(): string
	{
		return $this->startDate;
	}

	/*** @param string $startDate */
	public function setStartDate(string $startDate): void
	{
		$this->startDate = $startDate;
	}

	/*** @return string */
	public function getStatus(): string
	{
		return $this->status;
	}

	/*** @param string $status */
	public function setStatus(string $status): void
	{
		$this->status = $status;
	}
}