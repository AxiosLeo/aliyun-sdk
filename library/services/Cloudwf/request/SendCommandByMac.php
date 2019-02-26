<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMacList($MacList)
 * @method array getMacList()
 * @method $this setCommand($Command)
 * @method string getCommand()
 */
final class SendCommandByMac extends CloudwfCommon
{
    public $action = 'SendCommandByMac';
}
