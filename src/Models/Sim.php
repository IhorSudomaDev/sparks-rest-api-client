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
	public function getSubscriberId()
	{
		return $this->subscriberId;
	}

	/*** @param int $subscriberId */
	public function setSubscriberId($subscriberId)
	{
		$this->subscriberId = $subscriberId;
	}

	/*** @return bool */
	public function isEsim()
	{
		return $this->esim;
	}

	/*** @param bool $esim */
	public function setEsim($esim)
	{
		$this->esim = $esim;
	}

	/*** @return string */
	public function getStatus()
	{
		return $this->status;
	}

	/*** @param string $status */
	public function setStatus($status)
	{
		$this->status = $status;
	}

	/*** @return string */
	public function getAffectationDateUtc()
	{
		return $this->affectationDateUtc;
	}

	/*** @param string $affectationDateUtc */
	public function setAffectationDateUtc($affectationDateUtc)
	{
		$this->affectationDateUtc = $affectationDateUtc;
	}

	/*** @return string */
	public function getPin1()
	{
		return $this->pin1;
	}

	/*** @param string $pin1 */
	public function setPin1($pin1)
	{
		$this->pin1 = $pin1;
	}

	/*** @return string */
	public function getPuk1()
	{
		return $this->puk1;
	}

	/*** @param string $puk1 */
	public function setPuk1($puk1)
	{
		$this->puk1 = $puk1;
	}

	/*** @return string */
	public function getPin2()
	{
		return $this->pin2;
	}

	/*** @param string $pin2 */
	public function setPin2($pin2)
	{
		$this->pin2 = $pin2;
	}

	/*** @return string */
	public function getPuk2()
	{
		return $this->puk2;
	}

	/*** @param string $puk2 */
	public function setPuk2($puk2)
	{
		$this->puk2 = $puk2;
	}

	/*** @return string */
	public function getSmdpServer()
	{
		return $this->smdpServer;
	}

	/*** @param string $smdpServer */
	public function setSmdpServer($smdpServer)
	{
		$this->smdpServer = $smdpServer;
	}

	/*** @return string */
	public function getActivationCode()
	{
		return $this->activationCode;
	}

	/*** @param string $activationCode */
	public function setActivationCode($activationCode)
	{
		$this->activationCode = $activationCode;
	}

	/*** @return string */
	public function getConfirmationCode()
	{
		return $this->confirmationCode;
	}

	/*** @param string $confirmationCode */
	public function setConfirmationCode($confirmationCode)
	{
		$this->confirmationCode = $confirmationCode;
	}
}