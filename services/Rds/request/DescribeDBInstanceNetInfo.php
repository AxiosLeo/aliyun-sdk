<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setFlag($Flag)
 * @method string getFlag()
 * @method $this setDBInstanceNetRWSplitType($DBInstanceNetRWSplitType)
 * @method string getDBInstanceNetRWSplitType()
 */
final class DescribeDBInstanceNetInfo extends RdsCommon
{
    public $action = 'DescribeDBInstanceNetInfo';
}
