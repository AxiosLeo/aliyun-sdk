<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setPriority($Priority)
 * @method string getPriority()
 * @method $this setNotifyConfig($NotifyConfig)
 * @method string getNotifyConfig()
 * @method $this setRole($Role)
 * @method string getRole()
 */
final class AddCoverPipeline extends MtsCommon
{
    public $action = 'AddCoverPipeline';
}
