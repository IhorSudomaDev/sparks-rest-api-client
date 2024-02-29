<?php

namespace SparksRestApiClient\Models;

/**
 * Class AffectPackageToSubscriber
 * @property string iccid
 * @property string smdpServer
 * @property string activationCode
 * @property string urlQrCode
 * @property int    subscriberId
 * @property int    esimId
 * @property int    subsPackageId
 * @property string userSimName
 * @package SparksRestApiClient\Models
 */
class AffectPackageToSubscriber
{
	/*** @return string */
	public function getIccid(): string
	{
		return $this->iccid;
	}

	/*** @return string */
	public function getSmdpServer(): string
	{
		return $this->smdpServer;
	}

	/*** @return string */
	public function getActivationCode(): string
	{
		return $this->activationCode;
	}

	/*** @return string */
	public function getUrlQrCode(): string
	{
		return $this->urlQrCode;
	}

	/*** @return int */
	public function getSubscriberId(): int
	{
		return $this->subscriberId;
	}

	/*** @return int */
	public function getEsimId(): int
	{
		return $this->esimId;
	}

	/*** @return int */
	public function getSubsPackageId(): int
	{
		return $this->subsPackageId;
	}

	/*** @return string */
	public function getUserSimName(): string
	{
		return $this->userSimName;
	}
}