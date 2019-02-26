<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeZones extends VpcCommon
{
    public $action = 'DescribeZones';
}
