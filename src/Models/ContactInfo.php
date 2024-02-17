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

	/*** @return string */
	public function getCity(): string
	{
		return $this->city;
	}

	/*** @return string */
	public function getState(): string
	{
		return $this->state;
	}

	/*** @return string */
	public function getCountry(): string
	{
		return $this->country;
	}
}