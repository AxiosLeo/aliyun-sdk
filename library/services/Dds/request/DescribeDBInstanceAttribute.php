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
 * @method $this setEngine($Engine)
 * @method string getEngine()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 */
final class DescribeDBInstanceAttribute extends DdsCommon
{
    public $action = 'DescribeDBInstanceAttribute';
}
