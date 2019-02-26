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
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class AssociateHaVip extends VpcCommon
{
    public $action = 'AssociateHaVip';
}
