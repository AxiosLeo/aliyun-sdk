<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setObjectPath($ObjectPath)
 * @method string getObjectPath()
 * @method $this setObjectType($ObjectType)
 * @method string getObjectType()
 */
final class RefreshObjectCaches extends CdnCommon
{
    public $action = 'RefreshObjectCaches';
}
