<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setDiskId($DiskId)
 * @method string getDiskId()
 * @method $this setSnapshotLinkId($SnapshotLinkId)
 * @method string getSnapshotLinkId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSnapshotIds($SnapshotIds)
 * @method string getSnapshotIds()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setSnapshotName($SnapshotName)
 * @method string getSnapshotName()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setSnapshotType($SnapshotType)
 * @method string getSnapshotType()
 * @method $this setFilter_1_Key($Filter_1_Key)
 * @method string getFilter_1_Key()
 * @method $this setFilter_2_Key($Filter_2_Key)
 * @method string getFilter_2_Key()
 * @method $this setFilter_1_Value($Filter_1_Value)
 * @method string getFilter_1_Value()
 * @method $this setFilter_2_Value($Filter_2_Value)
 * @method string getFilter_2_Value()
 * @method $this setUsage($Usage)
 * @method string getUsage()
 * @method $this setSourceDiskType($SourceDiskType)
 * @method string getSourceDiskType()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setEncrypted($Encrypted)
 * @method boolean getEncrypted()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setDryRun($DryRun)
 * @method boolean getDryRun()
 * @method $this setKMSKeyId($KMSKeyId)
 * @method string getKMSKeyId()
 */
final class DescribeSnapshots extends EcsCommon
{
    public $action = 'DescribeSnapshots';
}
