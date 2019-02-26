<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setObjectPath($ObjectPath)
 * @method string getObjectPath()
 */
final class PushObjectCache extends VodCommon
{
    public $action = 'PushObjectCache';
}
