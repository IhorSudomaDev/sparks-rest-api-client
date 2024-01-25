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
}