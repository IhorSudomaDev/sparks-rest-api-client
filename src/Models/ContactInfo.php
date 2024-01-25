<?php

namespace SparksRestApiClient\Models;

/**
 * Class ContactInfo
 * @property string contactName
 * @property string city
 * @property string state
 * @property string country
 * @package SparksRestApiClient\Models
 */
class ContactInfo
{
	/*** @return string */
	public function getContactName(): string
	{
		return $this->contactName;
	}

	/*** @param string $contactName */
	public function setContactName(string $contactName): void
	{
		$this->contactName = $contactName;
	}

	/*** @return string */
	public function getCity(): string
	{
		return $this->city;
	}

	/*** @param string $city */
	public function setCity(string $city): void
	{
		$this->city = $city;
	}

	/*** @return string */
	public function getState(): string
	{
		return $this->state;
	}

	/*** @param string $state */
	public function setState(string $state): void
	{
		$this->state = $state;
	}

	/*** @return string */
	public function getCountry(): string
	{
		return $this->country;
	}

	/*** @param string $country */
	public function setCountry(string $country): void
	{
		$this->country = $country;
	}
}