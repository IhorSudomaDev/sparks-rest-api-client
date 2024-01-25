<?php

namespace SparksRestApiClient\Responses\Subscriber;

use SparksRestApiClient\Responses\Abstracts\AListResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class ListSubscriberResponse
 * @package SparksRestApiClient\Responses\Subscriber
 */
class ListSubscriberResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::SUBSCRIBER;
	/*** @var string */
	protected string $listName = 'subscriberList';
}