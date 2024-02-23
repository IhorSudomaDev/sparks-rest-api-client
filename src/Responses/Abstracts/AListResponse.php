<?php

namespace SparksRestApiClient\Responses\Abstracts;

use RuntimeException;
use SparksRestApiClient\Models\ResponseStatus;
use SparksRestApiClient\ValueObjects\ModelFactory;
use SparksRestApiClient\ValueObjects\ResponseStatusErrorCode;
use Throwable;

/**
 * Class AListResponse
 * @package SparksRestApiClient\Responses\Abstracts
 */
abstract class AListResponse extends AResponse
{
	/*** @var mixed */
	protected $result;

	/*** @throws Throwable */
	public function __construct($result)
	{
		parent::__construct($result);
		/*** @var ResponseStatus $responseStatus */
		$responseStatus = ModelFactory::create(new ResponseStatus(), $this->result->status);
		if ($responseStatus->getCode() !== ResponseStatusErrorCode::OK) {
			throw new RuntimeException($responseStatus->getMsg());
		}
	}

	/*** @return mixed */
	public function get()
	{
		return $this->result;
	}
}