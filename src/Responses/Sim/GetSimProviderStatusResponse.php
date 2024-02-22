<?php

namespace SparksRestApiClient\Responses\Sim;

use SparksRestApiClient\Responses\Abstracts\ASingleResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class GetSimProviderStatusResponse
 * @package SparksRestApiClient\Responses\Sim
 */
class GetSimProviderStatusResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::SIM;
}