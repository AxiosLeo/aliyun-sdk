<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVbrId($VbrId)
 * @method string getVbrId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setUserCidr($UserCidr)
 * @method string getUserCidr()
 */
final class TerminateVirtualBorderRouter extends EcsCommon
{
    public $action = 'TerminateVirtualBorderRouter';
}
