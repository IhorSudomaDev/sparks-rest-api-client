<?php

namespace SparksRestApiClient\Responses\Abstracts;

use RuntimeException;
use SparksRestApiClient\Exceptions\NotFoundSparksModelException;
use SparksRestApiClient\Models\ResponseStatus;
use SparksRestApiClient\ValueObjects\ModelFactory;
use SparksRestApiClient\ValueObjects\ResponseStatusErrorCode;
use Throwable;

/**
 * Class ASingleModelResponse
 * @package SparksRestApiClient\Responses\Abstracts
 */
abstract class ASingleModelResponse extends AResponse
{
	/*** @var mixed */
	protected $result;
	/*** @var string */
	protected string $modelClass;
	/*** @var string */
	protected string $singleName;
	/*** @var mixed */
	protected $model;

	/*** @throws Throwable */
	public function __construct($result)
	{
		parent::__construct($result);
		/*** @var ResponseStatus $responseStatus */
		$responseStatus = ModelFactory::create(new ResponseStatus(), $this->result->status);
		if ($responseStatus->getCode() !== ResponseStatusErrorCode::OK) {
			throw new RuntimeException($responseStatus->getMsg());
		}
		$modelName = '\SparksRestApiClient\Models\\' . $this->modelClass;
		$name      = $this->singleName;
		$data      = $this->result->$name;
		if ( ! empty($data)) {
			$this->model = ModelFactory::create(new $modelName(), $data);
		}
	}

	/**
	 * @return mixed
	 * @throws NotFoundSparksModelException
	 */
	public function get()
	{
		if ( ! empty($this->model)) {
			return $this->model;
		}
		throw new NotFoundSparksModelException($this->modelClass);
	}
}