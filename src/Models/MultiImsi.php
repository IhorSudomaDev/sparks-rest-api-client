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
}