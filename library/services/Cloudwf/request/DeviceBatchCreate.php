<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSn($Sn)
 * @method string getSn()
 * @method $this setDeviceType($DeviceType)
 * @method integer getDeviceType()
 */
final class DeviceBatchCreate extends CloudwfCommon
{
    public $action = 'DeviceBatchCreate';
}
