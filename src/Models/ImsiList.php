<?php

namespace SparksRestApiClient\Models;

/**
 * Class ImsiList
 * @property int    id
 * @property int    subscriberId
 * @property string imsi
 * @property string startDate
 * @property string iccid
 * @package SparksRestApiClient\Models
 */
class ImsiList
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
	public function getImsi(): string
	{
		return $this->imsi;
	}

	/*** @return string */
	public function getStartDate(): string
	{
		return $this->startDate;
	}

	/*** @return string */
	public function getIccid(): string
	{
		return $this->iccid;
	}
}