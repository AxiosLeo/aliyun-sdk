<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setSpeed($Speed)
 * @method string getSpeed()
 * @method $this setSpeedLevel($SpeedLevel)
 * @method integer getSpeedLevel()
 * @method $this setNotifyConfig($NotifyConfig)
 * @method string getNotifyConfig()
 * @method $this setRole($Role)
 * @method string getRole()
 */
final class AddPipeline extends MtsCommon
{
    public $action = 'AddPipeline';
}
