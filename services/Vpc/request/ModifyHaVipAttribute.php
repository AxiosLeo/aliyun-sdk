<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setHaVipId($HaVipId)
 * @method string getHaVipId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyHaVipAttribute extends VpcCommon
{
    public $action = 'ModifyHaVipAttribute';
}
