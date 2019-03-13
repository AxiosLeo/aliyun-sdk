<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 */
final class DescribeDBClusterAccessWhitelist extends PolardbCommon
{
    public $action = 'DescribeDBClusterAccessWhitelist';
}
