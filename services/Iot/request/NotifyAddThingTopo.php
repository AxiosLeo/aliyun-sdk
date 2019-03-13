<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDeviceListStr($DeviceListStr)
 * @method string getDeviceListStr()
 * @method $this setGwIotId($GwIotId)
 * @method string getGwIotId()
 * @method $this setGwProductKey($GwProductKey)
 * @method string getGwProductKey()
 * @method $this setGwDeviceName($GwDeviceName)
 * @method string getGwDeviceName()
 */
final class NotifyAddThingTopo extends IotCommon
{
    public $action = 'NotifyAddThingTopo';
}
