<?php

namespace SparksRestApiClient\ValueObjects;

/**
 * Class SmsErrorCode
 * @package SparksRestApiClient\ValueObjects
 */
class SmsErrorCode
{
	/*** @var string */
	public const OK = 0;
	/*** @var string */
	public const UNKNOWN_REQUEST = 1;
	/*** @var string */
	public const INVALID_REQUEST = 2;
	/*** @var string */
	public const UNEXPECTED_ERROR = 3;
	/*** @var string */
	public const DB_DUPLICATE_ENTRY = 4;
	/*** @var string */
	public const DB_DATA_INCONSISTENCY = 5;
	/*** @var string */
	public const DB_NOT_FOUND = 6;
	/*** @var string */
	public const DB_ERROR = 7;
	/*** @var string */
	public const NO_API_ACCOUNT_FOR_RESELLER = 8;
	/*** @var string */
	public const SRC_IP_NOT_AUTHORISED = 9;
	/*** @var string */
	public const INVALID_RESELLER = 10;
	/*** @var string */
	public const RESOURCE_NOT_VISIBLE = 11;
	/*** @var string */
	public const RESOURCE_READ_ONLY = 12;
	/*** @var string */
	public const SMS_API_ERROR = 13;
	/*** @var string */
	public const OPERATION_IMPOSSIBLE = 14;
	/*** @var string */
	public const HLR_API_ERROR = 15;
	/*** @var string */
	public const STEERING_API_ERROR = 16;
}