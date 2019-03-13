<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setObjectPath($ObjectPath)
 * @method string getObjectPath()
 * @method $this setArea($Area)
 * @method string getArea()
 */
final class PushObjectCache extends CdnCommon
{
    public $action = 'PushObjectCache';
}
