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
 * @method $this setGroupDesc($GroupDesc)
 * @method string getGroupDesc()
 */
final class UpdateDeviceGroup extends IotCommon
{
    public $action = 'UpdateDeviceGroup';
}
