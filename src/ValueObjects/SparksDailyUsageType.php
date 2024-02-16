<?php

namespace SparksRestApiClient\ValueObjects;

/**
 * Class SparksDailyUsageType
 * @package App\ValuesObject
 */
class SparksDailyUsageType
{
	/*** @var string */
	public const API = 'api';
	/*** @var string */
	public const QUOTA = 'quota';

	/*** @return string[] */
	public static function getList(): array
	{
		return [self::API, self::QUOTA];
	}
}