<?php

namespace SparksRestApiClient\Models;

/**
 * Class Reseller
 * @property int          id
 * @property string       name
 * @property int          parentId
 * @property float        balance
 * @property string       cdrFolder
 * @property TrafficInfo  trafficInfo
 * @property ChargingInfo chargingInfo
 * @property ContactInfo  contactInfo
 * @property Account[]    account
 * @package SparksRestApiClient\Models
 */
class Reseller
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

	/*** @return int */
	public function getParentId(): int
	{
		return $this->parentId;
	}

	/*** @return float */
	public function getBalance(): float
	{
		return $this->balance;
	}

	/*** @return string */
	public function getCdrFolder(): string
	{
		return $this->cdrFolder;
	}

	/*** @return TrafficInfo */
	public function getTrafficInfo(): TrafficInfo
	{
		return $this->trafficInfo;
	}

	/*** @return ChargingInfo */
	public function getChargingInfo(): ChargingInfo
	{
		return $this->chargingInfo;
	}

	/*** @return ContactInfo */
	public function getContactInfo(): ContactInfo
	{
		return $this->contactInfo;
	}

	/*** @return array|Account[] */
	public function getAccount(): array
	{
		return $this->account ?? [];
	}
}