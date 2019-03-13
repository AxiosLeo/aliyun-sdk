<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRouterInterfaceId($RouterInterfaceId)
 * @method string getRouterInterfaceId()
 * @method $this setSpec($Spec)
 * @method string getSpec()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ModifyRouterInterfaceSpec extends VpcCommon
{
    public $action = 'ModifyRouterInterfaceSpec';
}
