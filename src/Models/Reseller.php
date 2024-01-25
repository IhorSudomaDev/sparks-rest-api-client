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
 * @property array        account
 * @package SparksRestApiClient\Models
 */
class Reseller
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

	/*** @return string */
	public function getName(): string
	{
		return $this->name;
	}

	/*** @param string $name */
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	/*** @return int */
	public function getParentId(): int
	{
		return $this->parentId;
	}

	/*** @param int $parentId */
	public function setParentId(int $parentId): void
	{
		$this->parentId = $parentId;
	}

	/*** @return float */
	public function getBalance(): float
	{
		return $this->balance;
	}

	/*** @param float $balance */
	public function setBalance(float $balance): void
	{
		$this->balance = $balance;
	}

	/*** @return string */
	public function getCdrFolder(): string
	{
		return $this->cdrFolder;
	}

	/*** @param string $cdrFolder */
	public function setCdrFolder(string $cdrFolder): void
	{
		$this->cdrFolder = $cdrFolder;
	}

	/*** @return TrafficInfo */
	public function getTrafficInfo(): TrafficInfo
	{
		return $this->trafficInfo;
	}

	/*** @param TrafficInfo $trafficInfo */
	public function setTrafficInfo(TrafficInfo $trafficInfo): void
	{
		$this->trafficInfo = $trafficInfo;
	}

	/*** @return ChargingInfo */
	public function getChargingInfo(): ChargingInfo
	{
		return $this->chargingInfo;
	}

	/*** @param ChargingInfo $chargingInfo */
	public function setChargingInfo(ChargingInfo $chargingInfo): void
	{
		$this->chargingInfo = $chargingInfo;
	}

	/*** @return ContactInfo */
	public function getContactInfo(): ContactInfo
	{
		return $this->contactInfo;
	}

	/*** @param ContactInfo $contactInfo */
	public function setContactInfo(ContactInfo $contactInfo): void
	{
		$this->contactInfo = $contactInfo;
	}

	/*** @return array */
	public function getAccount(): array
	{
		return $this->account;
	}

	/*** @param array $account */
	public function setAccount(array $account): void
	{
		$this->account = $account;
	}
}