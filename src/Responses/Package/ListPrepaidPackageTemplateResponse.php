<?php

namespace SparksRestApiClient\Responses\Package;

use SparksRestApiClient\Models\Template;
use SparksRestApiClient\Responses\Abstracts\AListResponse;
use SparksRestApiClient\ValueObjects\ModelFactory;

/**
 * Class ListPrepaidPackageTemplateResponse
 * @package SparksRestApiClient\Responses\Package
 */
class ListPrepaidPackageTemplateResponse extends AListResponse
{
	/*** @return array */
	public function getList(): array
	{
		$list = [];
		foreach ($this->result->listPrepaidPackageTemplate->template as $data) {
			$list[] = ModelFactory::create(new Template(), $data);
		}
		return $list;
	}
}