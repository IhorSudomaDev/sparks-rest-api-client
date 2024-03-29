<?php

namespace SparksRestApiClient\Responses\Subscriber;

use SparksRestApiClient\Responses\Abstracts\ASingleModelResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class SubscriberUsageOverPeriodResponse
 * @package SparksRestApiClient\Responses\Subscriber
 */
class SubscriberUsageOverPeriodResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::SUBSCRIBER_USAGE_OVER_PERIOD;
	/*** @var string */
	protected string $singleName = 'subscriberUsageOverPeriod';
}