<?php

namespace SparksRestApiClient\Models;

/**
 * Class ResponseStatus
 * @property int    code
 * @property string msg
 * @package SparksRestApiClient\Models
 */
class ResponseStatus
{
	/*** @return int */
	public function getCode(): int
	{
		return $this->code;
	}

	/*** @return string */
	public function getMsg(): string
	{
		return $this->msg;
	}
}