<?php

namespace SparksRestApiClient\ValueObjects;

/**
 * Class UsageType
 * @package SparksRestApiClient\ValueObjects
 */
class UsageType
{
	/*** @var int */
	public const MOC = 1;
	/*** @var int */
	public const MTC = 15;
	/*** @var int */
	public const M0_SMS = 21;
	/*** @var int */
	public const MT_SMS = 22;
	/*** @var int */
	public const DATA = 33;
	/*** @var int */
	public const MOC_VOIP = 40;
	/*** @var int */
	public const MTC_VOIP = 41;
}