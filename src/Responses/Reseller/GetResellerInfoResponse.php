<?php

namespace SparksRestApiClient\Responses\Reseller;

use SparksRestApiClient\Responses\Abstracts\ASingleModelResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class GetResellerInfoResponse
 * @package SparksRestApiClient\Responses\Reseller
 */
class GetResellerInfoResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::RESELLER;
	/*** @var string */
	protected string $singleName = 'getResellerInfo';
}