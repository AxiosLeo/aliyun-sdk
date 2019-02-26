<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDid($Did)
 * @method integer getDid()
 * @method $this setMac($Mac)
 * @method string getMac()
 */
final class DeviceDelete extends CloudwfCommon
{
    public $action = 'DeviceDelete';
}
