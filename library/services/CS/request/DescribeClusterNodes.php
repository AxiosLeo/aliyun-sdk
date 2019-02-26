<?php
namespace aliyun\sdk\services\CS\request;

use aliyun\sdk\services\CS\CSCommon;

/**
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setpageSize($pageSize)
 * @method string getpageSize()
 * @method $this setpageNumber($pageNumber)
 * @method string getpageNumber()
 */
final class DescribeClusterNodes extends CSCommon
{
    public $action = 'DescribeClusterNodes';
}
