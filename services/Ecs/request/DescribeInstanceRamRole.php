<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 * @method $this setRamRoleName($RamRoleName)
 * @method string getRamRoleName()
 */
final class DescribeInstanceRamRole extends EcsCommon
{
    public $action = 'DescribeInstanceRamRole';
}
