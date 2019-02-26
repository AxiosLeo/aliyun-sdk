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
 * @method $this setFromApp($FromApp)
 * @method string getFromApp()
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setBusinessInfo($BusinessInfo)
 * @method string getBusinessInfo()
 * @method $this setCouponNo($CouponNo)
 * @method string getCouponNo()
 */
final class RenewMultiInstance extends RKvstoreCommon
{
    public $action = 'RenewMultiInstance';
}
