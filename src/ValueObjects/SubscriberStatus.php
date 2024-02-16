<?php

namespace SparksRestApiClient\ValueObjects;

/**
 * Class SubscriberStatus
 * @package SparksRestApiClient\ValueObjects
 */
class SubscriberStatus
{
	/*** @var string */
	public const ACTIVE = 'Active';
	/*** @var string */
	public const DISCONNECTED = 'Disconnected';
	/*** @var string */
	public const INACTIVE = 'Inactive';
	/*** @var string */
	public const PENDING = 'Pending';
	/*** @var string */
	public const SUSPENDED = 'Suspended';

	/*** @return string[] */
	public static function getList(): array
	{
		return [self::ACTIVE, self::DISCONNECTED, self::INACTIVE, self::PENDING, self::SUSPENDED];
	}
}