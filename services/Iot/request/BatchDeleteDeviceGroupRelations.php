<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setDevice($Device)
 * @method array getDevice()
 */
final class BatchDeleteDeviceGroupRelations extends IotCommon
{
    public $action = 'BatchDeleteDeviceGroupRelations';
}
