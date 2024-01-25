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

	/*** @param MobilePlan $mobilePlan */
	public function setMobilePlan(MobilePlan $mobilePlan): void
	{
		$this->mobilePlan = $mobilePlan;
	}

	/*** @return VoipPlan */
	public function getVoipPlan(): VoipPlan
	{
		return $this->voipPlan;
	}

	/*** @param VoipPlan $voipPlan */
	public function setVoipPlan(VoipPlan $voipPlan): void
	{
		$this->voipPlan = $voipPlan;
	}

	/*** @return bool */
	public function isCallPackageUseSingleCounter(): bool
	{
		return $this->CallPackageUseSingleCounter;
	}

	/*** @param bool $CallPackageUseSingleCounter */
	public function setCallPackageUseSingleCounter(bool $CallPackageUseSingleCounter): void
	{
		$this->CallPackageUseSingleCounter = $CallPackageUseSingleCounter;
	}

	/*** @return bool */
	public function isVoipFree(): bool
	{
		return $this->voipFree;
	}

	/*** @param bool $voipFree */
	public function setVoipFree(bool $voipFree): void
	{
		$this->voipFree = $voipFree;
	}
}