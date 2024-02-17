<?php

namespace SparksRestApiClient\Models;

/**
 * Class VoipPlan
 * @property int    id
 * @property string name
 * @package SparksRestApiClient\Models
 */
class VoipPlan
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
}