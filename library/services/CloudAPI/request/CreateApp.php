<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class CreateApp extends CloudAPICommon
{
    public $action = 'CreateApp';
}
