<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBEndpointId($DBEndpointId)
 * @method string getDBEndpointId()
 */
final class DescribeDBClusterEndpoints extends PolardbCommon
{
    public $action = 'DescribeDBClusterEndpoints';
}
