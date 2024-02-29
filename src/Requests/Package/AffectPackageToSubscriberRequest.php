<?php

namespace SparksRestApiClient\Requests\Package;

use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Package\AffectPackageToSubscriberResponse;

/**
 * Class AffectPackageToSubscriberRequest
 * @package SparksRestApiClient\Requests\Package
 */
class AffectPackageToSubscriberRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'affectPackageToSubscriber';

	/*** @var string */
	protected string $responseClass = AffectPackageToSubscriberResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	/**
	 * @param string $apiToken
	 * @param int    $packageTemplateId
	 * @param string $iccid
	 */
	public function __construct(string $apiToken, int $packageTemplateId, string $iccid)
	{
		parent::__construct($apiToken);
		$this->withPackageTemplateId($packageTemplateId);
		$this->withSubscriber($iccid);
	}

	/**
	 * @param int $packageTemplateId
	 * @return void
	 */
	private function withPackageTemplateId(int $packageTemplateId): void
	{
		$this->availableInputParameters['packageTemplateId'] = $packageTemplateId;
	}

	/**
	 * @param string $iccid
	 * @return void
	 */
	private function withSubscriber(string $iccid): void
	{
		$this->availableInputParameters['subscriber'] = ['iccid' => $iccid];
	}

	/**
	 * @param int $days
	 * @return $this
	 */
	public function withValidityPeriod(int $days): self
	{
		$this->availableInputParameters['validityPeriod'] = $days;
		return $this;
	}

	/**
	 * @param string $start
	 * @param string $end
	 * @return $this
	 */
	public function withActivePeriod(string $start, string $end): self
	{
		$this->availableInputParameters['activePeriod'] = ['start' => $start, 'end' => $end];
		return $this;
	}
}