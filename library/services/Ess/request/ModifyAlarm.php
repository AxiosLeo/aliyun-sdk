<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAlarmTaskId($AlarmTaskId)
 * @method string getAlarmTaskId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setAlarmAction($AlarmAction)
 * @method array getAlarmAction()
 */
final class ModifyAlarm extends EssCommon
{
    public $action = 'ModifyAlarm';
}
