<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setShowExpired($ShowExpired)
 * @method boolean getShowExpired()
 * @method $this setSnapshotId($SnapshotId)
 * @method string getSnapshotId()
 * @method $this setImageName($ImageName)
 * @method string getImageName()
 * @method $this setImageOwnerAlias($ImageOwnerAlias)
 * @method string getImageOwnerAlias()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setIsSupportIoOptimized($IsSupportIoOptimized)
 * @method boolean getIsSupportIoOptimized()
 * @method $this setIsSupportCloudinit($IsSupportCloudinit)
 * @method boolean getIsSupportCloudinit()
 * @method $this setOSType($OSType)
 * @method string getOSType()
 * @method $this setArchitecture($Architecture)
 * @method string getArchitecture()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setUsage($Usage)
 * @method string getUsage()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setDryRun($DryRun)
 * @method boolean getDryRun()
 * @method $this setActionType($ActionType)
 * @method string getActionType()
 * @method $this setFilter($Filter)
 * @method array getFilter()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class DescribeImages extends EcsCommon
{
    public $action = 'DescribeImages';
}
