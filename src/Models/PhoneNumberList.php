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
	public function getPhoneNumber(): string
	{
		return $this->phoneNumber;
	}

	/*** @param string $phoneNumber */
	public function setPhoneNumber(string $phoneNumber): void
	{
		$this->phoneNumber = $phoneNumber;
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