<?php

namespace SparksRestApiClient\Models;

/**
 * Class PhoneNumberList
 * @property int    id
 * @property int    subscriberId
 * @property string phoneNumber
 * @property string startDate
 * @package SparksRestApiClient\Models
 */
class PhoneNumberList
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
	public function getPhoneNumber(): string
	{
		return $this->phoneNumber;
	}

	/*** @return string */
	public function getStartDate(): string
	{
		return $this->startDate;
	}
}