<?php

namespace SparksRestApiClient\Requests\Sms;

use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Sms\SendMtSmsResponse;

/**
 * Class SendMtSmsRequest
 * @package SparksRestApiClient\Requests\Sms
 */
class SendMtSmsRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'sendMtSms';

	/*** @var string */
	protected string $responseClass = SendMtSmsResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	/**
	 * @param string $apiToken
	 * @param string $imsi
	 * @param string $text
	 * @param string $senderId
	 */
	public function __construct(string $apiToken, string $imsi, string $text, string $senderId)
	{
		parent::__construct($apiToken);
		$this->withImsi($imsi);
		$this->withText($text);
		$this->withSenderId($senderId);
	}

	/**
	 * @param string $imsi
	 * @return $this
	 */
	public function withImsi(string $imsi): self
	{
		$this->availableInputParameters['imsi'] = $imsi;
		return $this;
	}

	/**
	 * @param string $text
	 * @return $this
	 */
	public function withText(string $text): self
	{
		$this->availableInputParameters['text'] = $text;
		return $this;
	}

	/**
	 * @param string $senderId
	 * @return $this
	 */
	public function withSenderId(string $senderId): self
	{
		$this->availableInputParameters['senderId'] = $senderId;
		return $this;
	}
}