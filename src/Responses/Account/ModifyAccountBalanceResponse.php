<?php

namespace SparksRestApiClient\Responses\Account;

use SparksRestApiClient\Responses\Abstracts\ASingleResponse;
use SparksRestApiClient\ValueObjects\Model;

/**
 * Class ModifyAccountBalanceResponse
 * @package SparksRestApiClient\Responses\Account
 */
class ModifyAccountBalanceResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::ACCOUNT;
}