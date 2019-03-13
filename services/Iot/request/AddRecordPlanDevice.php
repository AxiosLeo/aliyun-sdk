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
final class AddRecordPlanDevice extends IotCommon
{
    public $action = 'AddRecordPlanDevice';
}
