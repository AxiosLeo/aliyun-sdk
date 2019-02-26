<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setPriority($Priority)
 * @method integer getPriority()
 * @method $this setNotifyConfig($NotifyConfig)
 * @method string getNotifyConfig()
 */
final class AddAsrPipeline extends MtsCommon
{
    public $action = 'AddAsrPipeline';
}
