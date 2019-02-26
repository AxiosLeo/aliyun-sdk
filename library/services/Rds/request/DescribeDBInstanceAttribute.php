<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setExpired($Expired)
 * @method string getExpired()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class DescribeDBInstanceAttribute extends RdsCommon
{
    public $action = 'DescribeDBInstanceAttribute';
}
