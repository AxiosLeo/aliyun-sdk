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
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setFromApp($FromApp)
 * @method string getFromApp()
 * @method $this setBusinessInfo($BusinessInfo)
 * @method string getBusinessInfo()
 * @method $this setAutoRenew($AutoRenew)
 * @method string getAutoRenew()
 * @method $this setCouponNo($CouponNo)
 * @method string getCouponNo()
 */
final class TransformToPrePaid extends DdsCommon
{
    public $action = 'TransformToPrePaid';
}
