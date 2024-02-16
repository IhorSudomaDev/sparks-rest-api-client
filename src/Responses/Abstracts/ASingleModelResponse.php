<?php

namespace SparksRestApiClient\Responses\Abstracts;

use SparksRestApiClient\Exceptions\NotFoundSparksModelException;
use SparksRestApiClient\ValueObjects\ModelFactory;
use stdClass;

/**
 * Class ASingleModelResponse
 * @package SparksRestApiClient\Responses\Abstracts
 */
abstract class ASingleModelResponse extends AResponse
{
	/*** @var string */
	protected string $modelClass;
	/*** @var string */
	protected string $singleName;

	/**
	 * @param $result
	 * @return mixed|stdClass
	 * @throws NotFoundSparksModelException
	 */
	public function get($result)
	{
		if ($result->status->code === 6) {
			throw new NotFoundSparksModelException($this->modelClass);
		}
		$model = new stdClass();
		$modelClass = $this->modelClass;
		$modelName  = '\SparksRestApiClient\Models\\' . $modelClass;
		if ( ! empty($result)) {
			foreach ($result as $data) {
				$model = ModelFactory::create(new $modelName(), $data);
			}
		}
		return $model;
	}
}