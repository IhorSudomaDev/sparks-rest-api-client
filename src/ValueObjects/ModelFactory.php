<?php

namespace SparksRestApiClient\ValueObjects;

use Exception;
use SparksRestApiClient\Models\Account;
use SparksRestApiClient\Models\ContactInfo;
use SparksRestApiClient\Models\ImsiList;
use SparksRestApiClient\Models\MultiImsi;
use SparksRestApiClient\Models\PhoneNumberList;
use SparksRestApiClient\Models\QuantityPerCountry;
use SparksRestApiClient\Models\QuantityPerOperator;
use SparksRestApiClient\Models\Reseller;
use SparksRestApiClient\Models\Sim;
use SparksRestApiClient\Models\Status;
use SparksRestApiClient\Models\Subscriber;
use SparksRestApiClient\Models\SubsDailyUsage;
use SparksRestApiClient\Models\SubsPeriodUsage;
use SparksRestApiClient\Models\Total;
use SparksRestApiClient\Models\Usage;
use stdClass;

/**
 * Class Modelfactory
 * @package SparksRestApiClient\ValueObjects
 */
class ModelFactory
{
	/**
	 * @param $model
	 * @param $data
	 * @return mixed
	 */
	public static function create($model, $data)
	{
		foreach ($data as $key => $value) {
			if ($value instanceof stdClass) {
				try {
					$modelClass = '\SparksRestApiClient\Models\\' . str_replace('_', '', ucwords($key, '_'));
					if (class_exists($modelClass)) {
						$model->$key = self::create(new $modelClass(), $value);
					} else {
						$model->$key = $value;
					}
				} catch (Exception $e) {
					echo $e->getMessage();
				}
			} else if (is_array($value)) {
				$model->$key = [];
				foreach ($value as $item) {
					switch ($key) {
						case 'account':
							$newModel = new Account();
							break;
						case 'contactInfo':
							$newModel = new ContactInfo();
							break;
						case 'imsiList':
							$newModel = new ImsiList();
							break;
						case 'multiImsi':
							$newModel = new MultiImsi();
							break;
						case 'phoneNumberList':
							$newModel = new PhoneNumberList();
							break;
						case 'quantityPerCountry':
							$newModel = new QuantityPerCountry();
							break;
						case 'quantityPerOperator':
							$newModel = new QuantityPerOperator();
							break;
						case 'reseller':
							$newModel = new Reseller();
							break;
						case 'sim':
							$newModel = new Sim();
							break;
						case 'status':
							$newModel = new Status();
							break;
						case 'subscriber':
						case 'getSingleSubscriber':
							$newModel = new Subscriber();
							break;
						case 'subsDailyUsages':
							$newModel = new SubsDailyUsage();
							break;
						case 'subsPeriodUsages':
							$newModel = new SubsPeriodUsage();
							break;
						case 'total':
							$newModel = new Total();
							break;
						case 'usages':
							$newModel = new Usage();
							break;
						default:
							$newModel = new stdClass();
							break;
					}
					try {
						$model->$key[] = self::create($newModel, $item);
					} catch (Exception $e) {
						echo $e->getMessage();
					}
				}
			} else {
				$model->$key = $value;
			}
		}
		return $model;
	}
}