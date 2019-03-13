<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMac($Mac)
 * @method string getMac()
 */
final class GetDeviceInfoByMac extends CloudwfCommon
{
    public $action = 'GetDeviceInfoByMac';
}
