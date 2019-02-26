<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setIpAddress($IpAddress)
 * @method string getIpAddress()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class CreateHaVip extends EcsCommon
{
    public $action = 'CreateHaVip';
}
