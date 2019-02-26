<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceType($DBInstanceType)
 * @method string getDBInstanceType()
 * @method $this setPageSize($PageSize)
 * @method string getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method string getPageNumber()
 */
final class DescribeInstanceAutoRenewalAttribute extends DdsCommon
{
    public $action = 'DescribeInstanceAutoRenewalAttribute';
}
