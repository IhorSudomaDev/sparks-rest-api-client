<?php

namespace SparksRestApiClient\Requests\Package;

use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Package\ListPrepaidPackageTemplateResponse;

/**
 * Class ListPrepaidPackageTemplateRequest
 * @package SparksRestApiClient\Requests\Package
 */
class ListPrepaidPackageTemplateRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'listPrepaidPackageTemplate';

	/*** @var string */
	protected string $responseClass = ListPrepaidPackageTemplateResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	/**
	 * @param int $resellerId
	 * @return $this
	 */
	public function withResellerId(int $resellerId): self
	{
		$this->availableInputParameters['resellerId'] = $resellerId;
		return $this;
	}

}