<?php

namespace SparksRestApiClient\Responses\Abstracts;

use SparksRestApiClient\ValueObjects\ModelFactory;

/**
 * Class AListResponse
 * @package SparksRestApiClient\Responses\Abstracts
 */
abstract class AListResponse extends AResponse
{
	/*** @var string */
	protected string $modelClass;
	/*** @var string */
	protected string $listName;

	/**
	 * @param $result
	 * @return array
	 */
	public function get($result): array
	{
		$list       = [];
		$modelClass = $this->modelClass;
		$modelName  = '\SparksRestApiClient\Models\\' . $modelClass;
		if ( ! empty($result)) {
			foreach ($result as $data) {
				$list[] = ModelFactory::create(new $modelName(), $data);
			}
		}
		$finishList = (array) $list[1];
		$resultList = [];
		if (empty($this->listName)) {
			$resultList = $finishList[strtolower($modelClass)];
		} else if (array_key_exists($this->listName, $finishList)) {
			$resultList = $finishList[$this->listName];
		}
		return $resultList;
	}
}