<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($CommodityCode)
 * @method string getCommodityCode()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setDBInstanceClass($DBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setUsedTime($UsedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($TimeType)
 * @method string getTimeType()
 * @method $this setQuantity($Quantity)
 * @method integer getQuantity()
 * @method $this setOrderType($OrderType)
 * @method string getOrderType()
 * @method $this setPromotionCode($PromotionCode)
 * @method string getPromotionCode()
 * @method $this setBusinessInfo($BusinessInfo)
 * @method string getBusinessInfo()
 */
final class DescribeRenewalPrice extends RdsCommon
{
    public $action = 'DescribeRenewalPrice';
}
