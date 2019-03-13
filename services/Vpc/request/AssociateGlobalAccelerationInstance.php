<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($GlobalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setBackendServerId($BackendServerId)
 * @method string getBackendServerId()
 * @method $this setBackendServerRegionId($BackendServerRegionId)
 * @method string getBackendServerRegionId()
 * @method $this setBackendServerType($BackendServerType)
 * @method string getBackendServerType()
 */
final class AssociateGlobalAccelerationInstance extends VpcCommon
{
    public $action = 'AssociateGlobalAccelerationInstance';
}
