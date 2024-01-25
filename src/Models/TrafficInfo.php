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

	/*** @param bool $relayGy */
	public function setRelayGy(bool $relayGy): void
	{
		$this->relayGy = $relayGy;
	}

	/*** @return bool */
	public function isRelayCallSms(): bool
	{
		return $this->relayCallSms;
	}

	/*** @param bool $relayCallSms */
	public function setRelayCallSms(bool $relayCallSms): void
	{
		$this->relayCallSms = $relayCallSms;
	}

	/*** @return bool */
	public function isRelayLU(): bool
	{
		return $this->relayLU;
	}

	/*** @param bool $relayLU */
	public function setRelayLU(bool $relayLU): void
	{
		$this->relayLU = $relayLU;
	}

	/*** @return bool */
	public function isRelayVoIP(): bool
	{
		return $this->relayVoIP;
	}

	/*** @param bool $relayVoIP */
	public function setRelayVoIP(bool $relayVoIP): void
	{
		$this->relayVoIP = $relayVoIP;
	}
}