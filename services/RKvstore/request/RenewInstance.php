<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setCapacity($Capacity)
 * @method string getCapacity()
 * @method $this setInstanceClass($InstanceClass)
 * @method string getInstanceClass()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setFromApp($FromApp)
 * @method string getFromApp()
 * @method $this setBusinessInfo($BusinessInfo)
 * @method string getBusinessInfo()
 * @method $this setCouponNo($CouponNo)
 * @method string getCouponNo()
 * @method $this setForceUpgrade($ForceUpgrade)
 * @method boolean getForceUpgrade()
 */
final class RenewInstance extends RKvstoreCommon
{
    public $action = 'RenewInstance';
}
