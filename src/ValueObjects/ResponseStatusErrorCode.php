<?php

namespace SparksRestApiClient\ValueObjects;

/**
 * Class ResponseStatusErrorCode
 * @package SparksRestApiClient\ValueObjects
 */
class ResponseStatusErrorCode
{
	/*** @var int */
	public const OK = 0;
	/*** @var int */
	public const UNKNOWN_REQUEST = 1;
	/*** @var int */
	public const INVALID_REQUEST = 2;
	/*** @var int */
	public const UNEXPECTED_ERROR = 3;
	/*** @var int */
	public const DB_DUPLICATE_ENTRY = 4;
	/*** @var int */
	public const DB_DATA_INCONSISTENCY = 5;
	/*** @var int */
	public const DB_NOT_FOUND = 6;
	/*** @var int */
	public const DB_ERROR = 7;
	/*** @var int */
	public const NO_API_ACCOUNT_FOR_RESELLER = 8;
	/*** @var int */
	public const SRC_IP_NOT_AUTHORISED = 9;
	/*** @var int */
	public const INVALID_RESELLER = 10;
	/*** @var int */
	public const RESOURCE_NOT_VISIBLE = 11;
	/*** @var int */
	public const RESOURCE_READ_ONLY = 12;
	/*** @var int */
	public const SMS_API_ERROR = 13;
	/*** @var int */
	public const OPERATION_IMPOSSIBLE = 14;
	/*** @var int */
	public const HLR_API_ERROR = 15;
	/*** @var int */
	public const STEERING_API_ERROR = 16;
	/*** @var int */
	public const TRAFFIC_CONTROL_LIMIT_EXCEEDED = 100;
}