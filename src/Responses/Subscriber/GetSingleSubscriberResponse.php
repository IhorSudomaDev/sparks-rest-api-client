<?php

namespace SparksRestApiClient\Responses\Subscriber;

use SparksRestApiClient\Responses\Abstracts\ASingleModelResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class GetSingleSubscriberResponse
 * @package SparksRestApiClient\Responses\Subscriber
 */
class GetSingleSubscriberResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::SUBSCRIBER;
	/*** @var string */
	protected string $singleName = 'getSingleSubscriber';
}