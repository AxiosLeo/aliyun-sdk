<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setTemplateId($TemplateId)
 * @method string getTemplateId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setAllDay($AllDay)
 * @method integer getAllDay()
 * @method $this setTimeSections($TimeSections)
 * @method array getTimeSections()
 */
final class UpdateTimeTemplate extends IotCommon
{
    public $action = 'UpdateTimeTemplate';
}
