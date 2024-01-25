<?php

namespace SparksRestApiClient\Requests\Subscriber;

use DateTime;
use Exception;
use RuntimeException;
use SparksRestApiClient\Requests\Abstracts\ARequest;
use SparksRestApiClient\Responses\Subscriber\SubscriberUsageOverPeriodResponse;

/**
 * Class SubscriberUsageOverPeriodRequest
 * @package SparksRestApiClient\Requests\Subscriber
 */
class SubscriberUsageOverPeriodRequest extends ARequest
{
	/*** @var string */
	protected string $action = 'subscriberUsageOverPeriod';

	/*** @var string */
		protected string $responseClass = SubscriberUsageOverPeriodResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [];

	/**
	 * @param string $apiToken
	 * @param string $start
	 * @param string $end
	 * @throws Exception
	 */
	public function __construct(string $apiToken, string $start, string $end)
	{
		parent::__construct($apiToken);
		if (date_diff(new DateTime($end), new DateTime($start))->days > 7) {
			throw new RuntimeException('Period must not exceed 7 days');
		}
		$this->withPeriod($start, $end);
	}

	/**
	 * @param string $iccid
	 * @return $this
	 */
	public function withIccid(string $iccid): self
	{
		$this->availableInputParameters['subscriber'] = ['iccid' => $iccid];
		return $this;
	}

	/**
	 * @param string $start
	 * @param string $end
	 * @return void
	 */
	private function withPeriod(string $start, string $end): void
	{
		$this->availableInputParameters['period'] = ['start' => $start, 'end' => $end];
	}
}