<?php

namespace SparksRestApiClient\Responses\Package;

use SparksRestApiClient\Responses\Abstracts\ASingleModelResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class GetSingleSubscriberResponse
 * @package App\src\Responses\Subscriber
 */
class AffectPackageToSubscriberResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::AFFECT_PACKAGE_TO_SUBSCRIBER;
	/*** @var string */
	protected string $singleName = 'affectPackageToSubscriber';
}