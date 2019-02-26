<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setObjectPath($ObjectPath)
 * @method string getObjectPath()
 * @method $this setObjectType($ObjectType)
 * @method string getObjectType()
 */
final class RefreshObjectCaches extends VodCommon
{
    public $action = 'RefreshObjectCaches';
}
