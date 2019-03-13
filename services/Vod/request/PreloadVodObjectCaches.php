<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setObjectPath($ObjectPath)
 * @method string getObjectPath()
 */
final class PreloadVodObjectCaches extends VodCommon
{
    public $action = 'PreloadVodObjectCaches';
}
