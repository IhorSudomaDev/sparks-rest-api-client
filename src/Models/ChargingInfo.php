<?php

namespace SparksRestApiClient\Models;

/**
 * Class ChargingInfo
 * @property MobilePlan mobilePlan
 * @property VoipPlan   voipPlan
 * @property bool       CallPackageUseSingleCounter
 * @property bool       voipFree
 * @package SparksRestApiClient\Models
 */
class ChargingInfo
{
	/*** @return MobilePlan */
	public function getMobilePlan(): MobilePlan
	{
		return $this->mobilePlan;
	}

	/*** @return VoipPlan */
	public function getVoipPlan(): VoipPlan
	{
		return $this->voipPlan;
	}

	/*** @return bool */
	public function isCallPackageUseSingleCounter(): bool
	{
		return $this->CallPackageUseSingleCounter;
	}

	/*** @return bool */
	public function isVoipFree(): bool
	{
		return $this->voipFree;
	}
}