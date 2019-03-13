<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDiskIds($DiskIds)
 * @method string getDiskIds()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDiskChargeType($DiskChargeType)
 * @method string getDiskChargeType()
 */
final class ModifyDiskChargeType extends EcsCommon
{
    public $action = 'ModifyDiskChargeType';
}
