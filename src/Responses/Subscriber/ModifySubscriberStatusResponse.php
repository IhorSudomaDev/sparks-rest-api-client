<?php

namespace SparksRestApiClient\Responses\Subscriber;

use SparksRestApiClient\Responses\Abstracts\ASingleResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class ModifySubscriberStatusResponse
 * @package SparksRestApiClient\Responses\Subscriber
 */
class ModifySubscriberStatusResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::SUBSCRIBER;
}