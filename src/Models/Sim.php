<?php

namespace SparksRestApiClient\Models;

/**
 * Class Sim
 * @property int    subscriberId
 * @property bool   esim
 * @property string status
 * @property string affectationDateUtc
 * @property string pin1
 * @property string puk1
 * @property string pin2
 * @property string puk2
 * @property string smdpServer
 * @property string activationCode
 * @property string confirmationCode
 * @package SparksRestApiClient\Models
 */
class Sim
{
	/*** @return int */
	public function getSubscriberId(): int
	{
		return $this->subscriberId;
	}

	/*** @return bool */
	public function isEsim(): bool
	{
		return $this->esim;
	}

	/*** @return string */
	public function getStatus(): string
	{
		return $this->status;
	}

	/*** @return string */
	public function getAffectationDateUtc(): string
	{
		return $this->affectationDateUtc;
	}

	/*** @return string */
	public function getPin1(): string
	{
		return $this->pin1;
	}

	/*** @return string */
	public function getPuk1(): string
	{
		return $this->puk1;
	}

	/*** @return string */
	public function getPin2(): string
	{
		return $this->pin2;
	}

	/*** @return string */
	public function getPuk2(): string
	{
		return $this->puk2;
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
	public function getConfirmationCode(): string
	{
		return $this->confirmationCode;
	}
}