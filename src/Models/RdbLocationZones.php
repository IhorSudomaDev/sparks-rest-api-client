<?php

namespace SparksRestApiClient\Models;

/**
 * Class RdbLocationZones
 * @property int    locationzoneid
 * @property string locationzonename
 * @package SparksRestApiClient\Models
 */
class RdbLocationZones
{
	/*** @return int */
	public function getLocationzoneid(): int
	{
		return $this->locationzoneid;
	}

	/*** @return string */
	public function getLocationzonename(): string
	{
		return $this->locationzonename;
	}
}