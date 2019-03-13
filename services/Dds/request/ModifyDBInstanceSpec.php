<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceClass($DBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($DBInstanceStorage)
 * @method string getDBInstanceStorage()
 * @method $this setOrderType($OrderType)
 * @method string getOrderType()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setFromApp($FromApp)
 * @method string getFromApp()
 * @method $this setBusinessInfo($BusinessInfo)
 * @method string getBusinessInfo()
 * @method $this setReplicationFactor($ReplicationFactor)
 * @method string getReplicationFactor()
 * @method $this setCouponNo($CouponNo)
 * @method string getCouponNo()
 * @method $this setEffectiveTime($EffectiveTime)
 * @method string getEffectiveTime()
 */
final class ModifyDBInstanceSpec extends DdsCommon
{
    public $action = 'ModifyDBInstanceSpec';
}
