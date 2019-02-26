<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMacList($MacList)
 * @method array getMacList()
 */
final class GetScanMode extends CloudwfCommon
{
    public $action = 'GetScanMode';
}
