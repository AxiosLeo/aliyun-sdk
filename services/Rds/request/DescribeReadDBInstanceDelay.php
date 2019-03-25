<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setReadInstanceId($ReadInstanceId)
 * @method string getReadInstanceId()
 */
final class DescribeReadDBInstanceDelay extends RdsCommon
{
    public $action = 'DescribeReadDBInstanceDelay';
}
