<?php

namespace SparksRestApiClient\Responses\Subscriber;

use SparksRestApiClient\Responses\Abstracts\ASingleResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class ModifySubscriberBalanceResponse
 * @package SparksRestApiClient\Responses\Subscriber
 */
class ModifySubscriberBalanceResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::SUBSCRIBER;
}