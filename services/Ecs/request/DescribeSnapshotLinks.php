<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setDiskIds($DiskIds)
 * @method string getDiskIds()
 * @method $this setSnapshotLinkIds($SnapshotLinkIds)
 * @method string getSnapshotLinkIds()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeSnapshotLinks extends EcsCommon
{
    public $action = 'DescribeSnapshotLinks';
}
