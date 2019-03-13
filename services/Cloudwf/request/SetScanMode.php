<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setOperation($Operation)
 * @method integer getOperation()
 * @method $this setMacList($MacList)
 * @method array getMacList()
 */
final class SetScanMode extends CloudwfCommon
{
    public $action = 'SetScanMode';
}
