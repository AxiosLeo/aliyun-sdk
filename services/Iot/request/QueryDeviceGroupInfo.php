<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 */
final class QueryDeviceGroupInfo extends IotCommon
{
    public $action = 'QueryDeviceGroupInfo';
}
