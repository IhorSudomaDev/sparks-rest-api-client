<?php

namespace SparksRestApiClient\Responses\Sms;

use SparksRestApiClient\Responses\Abstracts\ASingleResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class SendMtSmsResponse
 * @package SparksRestApiClient\Responses\Sms
 */
class SendMtSmsResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = 'SMS';
}