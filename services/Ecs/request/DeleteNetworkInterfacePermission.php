<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNetworkInterfacePermissionId($NetworkInterfacePermissionId)
 * @method string getNetworkInterfacePermissionId()
 * @method $this setForce($Force)
 * @method boolean getForce()
 */
final class DeleteNetworkInterfacePermission extends EcsCommon
{
    public $action = 'DeleteNetworkInterfacePermission';
}
