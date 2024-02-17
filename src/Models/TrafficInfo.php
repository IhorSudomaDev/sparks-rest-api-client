<?php

namespace SparksRestApiClient\Models;

/**
 * Class TrafficInfo
 * @property bool relayGy
 * @property bool relayCallSms
 * @property bool relayLU
 * @property bool relayVoIP
 * @package SparksRestApiClient\Models
 */
class TrafficInfo
{
	/*** @return bool */
	public function isRelayGy(): bool
	{
		return $this->relayGy;
	}

	/*** @return bool */
	public function isRelayCallSms(): bool
	{
		return $this->relayCallSms;
	}

	/*** @return bool */
	public function isRelayLU(): bool
	{
		return $this->relayLU;
	}

	/*** @return bool */
	public function isRelayVoIP(): bool
	{
		return $this->relayVoIP;
	}
}