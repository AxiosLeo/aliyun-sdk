<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRouterInterfaceId($RouterInterfaceId)
 * @method string getRouterInterfaceId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class DeleteRouterInterface extends VpcCommon
{
    public $action = 'DeleteRouterInterface';
}
