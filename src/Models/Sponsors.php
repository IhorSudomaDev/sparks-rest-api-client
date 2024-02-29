<?php

namespace SparksRestApiClient\Models;

/**
 * Class Sponsors
 * @property int    sponsorid
 * @property string sponsorname
 * @property string displayname
 * @package SparksRestApiClient\Models
 */
class Sponsors
{
	/*** @return int */
	public function getSponsorid(): int
	{
		return $this->sponsorid;
	}

	/*** @return string */
	public function getSponsorname(): string
	{
		return $this->sponsorname;
	}

	/*** @return string */
	public function getDisplayname(): string
	{
		return $this->displayname;
	}
}