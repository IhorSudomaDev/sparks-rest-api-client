<?php

namespace SparksRestApiClient\Responses\Subscriber;

use SparksRestApiClient\Models\Subscriber;
use SparksRestApiClient\Responses\Abstracts\AListResponse;
use SparksRestApiClient\ValueObjects\ModelFactory;

/**
 * Class ListSubscriberResponse
 * @package SparksRestApiClient\Responses\Subscriber
 */
class ListSubscriberResponse extends AListResponse
{
	/*** @return array */
	public function getList(): array
	{
		$list = [];
		if (property_exists($this->result->listSubscriber, 'subscriberList')) {
			foreach ($this->result->listSubscriber->subscriberList as $data) {
				$list[] = ModelFactory::create(new Subscriber(), $data);
			}
		}
		return $list;
	}
}