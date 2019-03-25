<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAccountId($AccountId)
 * @method integer getAccountId()
 * @method $this setNetworkInterfaceId($NetworkInterfaceId)
 * @method string getNetworkInterfaceId()
 * @method $this setPermission($Permission)
 * @method string getPermission()
 */
final class CreateNetworkInterfacePermission extends EcsCommon
{
    public $action = 'CreateNetworkInterfacePermission';
}
