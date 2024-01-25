<?php

namespace SparksRestApiClient\Models;

/**
 * Class Subscriber
 * @property ImsiList        imsiList
 * @property PhoneNumberList phoneNumberList
 * @property MultiImsi       multiImsi
 * @property Status          status
 * @property Sim             sim
 * @property int             subscriberId
 * @property string          batchId
 * @property int             accountId
 * @property int             resellerId
 * @property bool            prepaid
 * @property float           balance
 * @property string          activationDate
 * @property string          email
 * @property bool            useAccountForCharging
 * @property bool            allowedMoc
 * @property bool            allowedMtc
 * @property bool            allowedData
 * @property bool            allowedMosms
 * @property bool            allowedMtsms
 * @property string          account
 * @property string          reseller
 * @package SparksRestApiClient\Models
 */
class Subscriber
{
	/*** @return ImsiList */
	public function getImsiList()
	{
		return $this->imsiList;
	}

	/*** @param ImsiList $imsiList */
	public function setImsiList($imsiList)
	{
		$this->imsiList = $imsiList;
	}

	/*** @return PhoneNumberList */
	public function getPhoneNumberList()
	{
		return $this->phoneNumberList;
	}

	/*** @param PhoneNumberList $phoneNumberList */
	public function setPhoneNumberList($phoneNumberList)
	{
		$this->phoneNumberList = $phoneNumberList;
	}

	/*** @return MultiImsi */
	public function getMultiImsi()
	{
		return $this->multiImsi;
	}

	/*** @param MultiImsi $multiImsi */
	public function setMultiImsi($multiImsi)
	{
		$this->multiImsi = $multiImsi;
	}

	/*** @return Status */
	public function getStatus()
	{
		return $this->status;
	}

	/*** @param Status $status */
	public function setStatus($status)
	{
		$this->status = $status;
	}

	/*** @return Sim */
	public function getSim()
	{
		return $this->sim;
	}

	/*** @param Sim $sim */
	public function setSim($sim)
	{
		$this->sim = $sim;
	}

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

	/*** @return string */
	public function getBatchId()
	{
		return $this->batchId;
	}

	/*** @param string $batchId */
	public function setBatchId($batchId)
	{
		$this->batchId = $batchId;
	}

	/*** @return int */
	public function getAccountId()
	{
		return $this->accountId;
	}

	/*** @param int $accountId */
	public function setAccountId($accountId)
	{
		$this->accountId = $accountId;
	}

	/*** @return int */
	public function getResellerId()
	{
		return $this->resellerId;
	}

	/*** @param int $resellerId */
	public function setResellerId($resellerId)
	{
		$this->resellerId = $resellerId;
	}

	/*** @return bool */
	public function isPrepaid()
	{
		return $this->prepaid;
	}

	/*** @param bool $prepaid */
	public function setPrepaid($prepaid)
	{
		$this->prepaid = $prepaid;
	}

	/*** @return float */
	public function getBalance()
	{
		return $this->balance;
	}

	/*** @param float $balance */
	public function setBalance($balance)
	{
		$this->balance = $balance;
	}

	/*** @return string */
	public function getActivationDate()
	{
		return $this->activationDate;
	}

	/*** @param string $activationDate */
	public function setActivationDate($activationDate)
	{
		$this->activationDate = $activationDate;
	}

	/*** @return string */
	public function getEmail()
	{
		return $this->email;
	}

	/*** @param string $email */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/*** @return bool */
	public function isUseAccountForCharging()
	{
		return $this->useAccountForCharging;
	}

	/*** @param bool $useAccountForCharging */
	public function setUseAccountForCharging($useAccountForCharging)
	{
		$this->useAccountForCharging = $useAccountForCharging;
	}

	/*** @return bool */
	public function isAllowedMoc()
	{
		return $this->allowedMoc;
	}

	/*** @param bool $allowedMoc */
	public function setAllowedMoc($allowedMoc)
	{
		$this->allowedMoc = $allowedMoc;
	}

	/*** @return bool */
	public function isAllowedMtc()
	{
		return $this->allowedMtc;
	}

	/*** @param bool $allowedMtc */
	public function setAllowedMtc($allowedMtc)
	{
		$this->allowedMtc = $allowedMtc;
	}

	/*** @return bool */
	public function isAllowedData()
	{
		return $this->allowedData;
	}

	/*** @param bool $allowedData */
	public function setAllowedData($allowedData)
	{
		$this->allowedData = $allowedData;
	}

	/*** @return bool */
	public function isAllowedMosms()
	{
		return $this->allowedMosms;
	}

	/*** @param bool $allowedMosms */
	public function setAllowedMosms($allowedMosms)
	{
		$this->allowedMosms = $allowedMosms;
	}

	/*** @return bool */
	public function isAllowedMtsms()
	{
		return $this->allowedMtsms;
	}

	/*** @param bool $allowedMtsms */
	public function setAllowedMtsms($allowedMtsms)
	{
		$this->allowedMtsms = $allowedMtsms;
	}

	/*** @return string */
	public function getAccount()
	{
		return $this->account;
	}

	/*** @param string $account */
	public function setAccount($account)
	{
		$this->account = $account;
	}

	/*** @return string */
	public function getReseller()
	{
		return $this->reseller;
	}

	/*** @param string $reseller */
	public function setReseller($reseller)
	{
		$this->reseller = $reseller;
	}
}