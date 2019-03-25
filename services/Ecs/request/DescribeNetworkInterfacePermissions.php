<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNetworkInterfaceId($NetworkInterfaceId)
 * @method string getNetworkInterfaceId()
 * @method $this setNetworkInterfacePermissionId($NetworkInterfacePermissionId)
 * @method array getNetworkInterfacePermissionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeNetworkInterfacePermissions extends EcsCommon
{
    public $action = 'DescribeNetworkInterfacePermissions';
}
