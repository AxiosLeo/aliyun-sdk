<?php
namespace aliyun\sdk\services\HPC\request;

use aliyun\sdk\services\HPC\HPCCommon;

/**
 * @method $this setTOKEN($TOKEN)
 * @method string getTOKEN()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 */
final class DescribeInstances extends HPCCommon
{
    public $action = 'DescribeInstances';
}
