<?php
namespace aliyun\sdk\services\HPC\request;

use aliyun\sdk\services\HPC\HPCCommon;

/**
 * @method $this setTOKEN($TOKEN)
 * @method string getTOKEN()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeInstancesInSecurityGroup extends HPCCommon
{
    public $action = 'DescribeInstancesInSecurityGroup';
}
