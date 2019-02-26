<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setPeriodUnit($PeriodUnit)
 * @method string getPeriodUnit()
 */
final class RenewInstance extends EcsCommon
{
    public $action = 'RenewInstance';
}
