<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 * @method $this setPageNo($PageNo)
 * @method integer getPageNo()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetThingTopo extends IotCommon
{
    public $action = 'GetThingTopo';
}
