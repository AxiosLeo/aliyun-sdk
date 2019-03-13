<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSid($Sid)
 * @method integer getSid()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setDeviceType($DeviceType)
 * @method integer getDeviceType()
 * @method $this setDeviceNum($DeviceNum)
 * @method string getDeviceNum()
 * @method $this setDevicePosition($DevicePosition)
 * @method string getDevicePosition()
 */
final class DeviceCreate extends CloudwfCommon
{
    public $action = 'DeviceCreate';
}
