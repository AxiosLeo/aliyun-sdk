<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setWhitelistNetworkType($WhitelistNetworkType)
 * @method string getWhitelistNetworkType()
 */
final class DescribeDBInstanceIPArrayList extends RdsCommon
{
    public $action = 'DescribeDBInstanceIPArrayList';
}
