<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setEventId($EventId)
 * @method string getEventId()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class QueryDeviceEventRecord extends IotCommon
{
    public $action = 'QueryDeviceEventRecord';
}
