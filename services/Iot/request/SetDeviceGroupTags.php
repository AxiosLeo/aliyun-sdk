<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setTagString($TagString)
 * @method string getTagString()
 */
final class SetDeviceGroupTags extends IotCommon
{
    public $action = 'SetDeviceGroupTags';
}
