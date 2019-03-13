<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVbrId($VbrId)
 * @method string getVbrId()
 * @method $this setPhysicalConnectionId($PhysicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class UnassociatePhysicalConnectionFromVirtualBorderRouter extends VpcCommon
{
    public $action = 'UnassociatePhysicalConnectionFromVirtualBorderRouter';
}
