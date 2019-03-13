<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setPlanId($PlanId)
 * @method string getPlanId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setEventTypes($EventTypes)
 * @method string getEventTypes()
 * @method $this setPreRecordDuration($PreRecordDuration)
 * @method integer getPreRecordDuration()
 * @method $this setRecordDuration($RecordDuration)
 * @method integer getRecordDuration()
 * @method $this setTemplateId($TemplateId)
 * @method string getTemplateId()
 */
final class UpdateEventRecordPlan extends IotCommon
{
    public $action = 'UpdateEventRecordPlan';
}
