<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($Identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 * @method $this setAsc($Asc)
 * @method integer getAsc()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryDevicePropertyData extends IotCommon
{
    public $action = 'QueryDevicePropertyData';
}
