<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAppId($AppId)
 * @method integer getAppId()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyApp extends CloudAPICommon
{
    public $action = 'ModifyApp';
}
