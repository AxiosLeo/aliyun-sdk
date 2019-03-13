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
 * @method $this setForce($Force)
 * @method string getForce()
 */
final class UnassociateHaVip extends VpcCommon
{
    public $action = 'UnassociateHaVip';
}
