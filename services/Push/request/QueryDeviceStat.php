<?php
namespace aliyun\sdk\services\Push\request;

use aliyun\sdk\services\Push\PushCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAppKey($AppKey)
 * @method integer getAppKey()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setDeviceType($DeviceType)
 * @method string getDeviceType()
 * @method $this setQueryType($QueryType)
 * @method string getQueryType()
 */
final class QueryDeviceStat extends PushCommon
{
    public $action = 'QueryDeviceStat';
}
