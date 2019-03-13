<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInvokeId($InvokeId)
 * @method string getInvokeId()
 * @method $this setInstanceId($InstanceId)
 * @method array getInstanceId()
 */
final class StopInvocation extends EcsCommon
{
    public $action = 'StopInvocation';
}
