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

	/*** @return int */
	public function getSubscriberId(): int
	{
		return $this->subscriberId;
	}

	/*** @return string */
	public function getStartDate(): string
	{
		return $this->startDate;
	}

	/*** @return string */
	public function getStatus(): string
	{
		return $this->status;
	}
}