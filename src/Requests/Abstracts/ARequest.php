<?php

namespace SparksRestApiClient\Requests\Abstracts;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use RuntimeException;
use SparksRestApiClient\Exceptions\AuthorizationException;
use SparksRestApiClient\Exceptions\ForbiddenException;
use SparksRestApiClient\Exceptions\PageNotFoundException;
use SparksRestApiClient\ValueObjects\RequestMethod;
use stdClass;
use Throwable;

/**
 * Class ARequest
 * @package SparksRestApiClient\Requests\Abstracts
 */
abstract class ARequest implements IRequest
{
	/*** @var string */
	protected string $apiUrl = 'https://ocs-api.telco-vision.com:7443/ocs-custo/main/v1?token=';
	/*** @var string */
	protected string $apiToken;
	/*** @var Client */
	protected Client $client;
	/*** @return string */
	protected string $action;
	/*** @var string */
	protected string $responseClass;
	/*** @var array */
	protected array $availableInputParameters = [];

	/*** @param string $apiToken */
	public function __construct(string $apiToken)
	{
		$this->apiToken = $apiToken;
		$this->client   = new Client();
	}

	/***
	 * @return mixed
	 * @throws Throwable|GuzzleException
	 */
	public function send()
	{
		$jsonData = json_encode($this->getData(), JSON_THROW_ON_ERROR);
		$data     = ['token' => $this->apiToken];
		$result   = $this->client->request(
			RequestMethod::POST,
			$this->apiUrl,
			[
				'headers' => [
					'Content-Type' => 'application/json',
				],
				'query'   => $data,
				'body'    => $jsonData,
			]
		);
		switch ($result->getStatusCode()) {
			case 200:
				$resultContent = $result->getBody()->getContents();
				if (empty($resultContent)) {
					$resultContent = '[]';
				}
				return (new $this->responseClass())->get(json_decode($resultContent, FALSE, 512, JSON_THROW_ON_ERROR));
			case 204:
			case 201:
				return TRUE;
			case 401:
				throw new AuthorizationException();
			case 403:
				throw new ForbiddenException();
			case 404:
				throw new PageNotFoundException();
			default:
				throw new RuntimeException('Status Code: ' . $result->getStatusCode());
		}
	}

	/*** @return array */
	public function getData(): array
	{
		$parameters = [];
		if (empty($this->availableInputParameters)) {
			$data = [$this->action => new stdClass()];
		} else {
			foreach ($this->availableInputParameters as $key => $value) {
				if ($value !== NULL) {
					$parameters[$key] = $value;
				}
			}
			if (array_key_exists('mainParameter', $parameters)) {
				$data = [$this->action => $parameters['mainParameter']];
			} else {
				$data = [$this->action => $parameters];
			}
		}
		return $data;
	}
}