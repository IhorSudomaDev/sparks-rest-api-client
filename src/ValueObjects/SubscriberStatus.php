<?php

namespace SparksRestApiClient\ValueObjects;

/**
 * Class SubscriberStatus
 * @package SparksRestApiClient\ValueObjects
 */
class SubscriberStatus
{
	/*** @var string */
	public const ACTIVE = 'ACTIVE';
	/*** @var string */
	public const DISCONNECTED = 'DISCONNECTED';
	/*** @var string */
	public const INACTIVE = 'INACTIVE';
	/*** @var string */
	public const PENDING = 'PENDING';
	/*** @var string */
	public const SUSPENDED = 'SUSPENDED';
}