<?php

namespace SparksRestApiClient\Responses\Account;

use SparksRestApiClient\Responses\Abstracts\AListResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class ModifyAccountBalanceResponse
 * @package SparksRestApiClient\Responses\Account
 */
class ModifyAccountBalanceResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::ACCOUNT;
	/*** @var string */
	protected string $listName = '';
}