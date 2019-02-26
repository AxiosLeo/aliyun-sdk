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
 */
final class DescribeSnapshotPackage extends EcsCommon
{
    public $action = 'DescribeSnapshotPackage';
}
