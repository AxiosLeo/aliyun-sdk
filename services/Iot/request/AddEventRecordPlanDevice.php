<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setPlanId($PlanId)
 * @method string getPlanId()
 * @method $this setStreamType($StreamType)
 * @method integer getStreamType()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class AddEventRecordPlanDevice extends IotCommon
{
    public $action = 'AddEventRecordPlanDevice';
}
