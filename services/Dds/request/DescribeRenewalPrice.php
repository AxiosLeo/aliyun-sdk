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
 * @method $this setBusinessInfo($BusinessInfo)
 * @method string getBusinessInfo()
 * @method $this setCouponNo($CouponNo)
 * @method string getCouponNo()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 */
final class DescribeRenewalPrice extends DdsCommon
{
    public $action = 'DescribeRenewalPrice';
}
