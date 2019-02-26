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
 * @method $this setInstanceClass($InstanceClass)
 * @method string getInstanceClass()
 * @method $this setFromApp($FromApp)
 * @method string getFromApp()
 * @method $this setBusinessInfo($BusinessInfo)
 * @method string getBusinessInfo()
 * @method $this setCouponNo($CouponNo)
 * @method string getCouponNo()
 * @method $this setForceUpgrade($ForceUpgrade)
 * @method boolean getForceUpgrade()
 * @method $this setEffectiveTime($EffectiveTime)
 * @method string getEffectiveTime()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 */
final class ModifyInstanceSpec extends RKvstoreCommon
{
    public $action = 'ModifyInstanceSpec';
}
