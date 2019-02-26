<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setObjectPath($ObjectPath)
 * @method string getObjectPath()
 * @method $this setObjectType($ObjectType)
 * @method string getObjectType()
 */
final class RefreshVodObjectCaches extends VodCommon
{
    public $action = 'RefreshVodObjectCaches';
}
