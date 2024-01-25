<?php

namespace SparksRestApiClient\Responses\Reseller;

use SparksRestApiClient\Responses\Abstracts\AListResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class ListResellerAccountResponse
 * @package SparksRestApiClient\Responses\Reseller
 */
class ListResellerAccountResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::RESELLER;
	/*** @var string */
	protected string $listName = '';
}