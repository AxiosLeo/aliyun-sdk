<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDid($Did)
 * @method integer getDid()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setDevicePosition($DevicePosition)
 * @method string getDevicePosition()
 */
final class DeviceUpdate extends CloudwfCommon
{
    public $action = 'DeviceUpdate';
}
