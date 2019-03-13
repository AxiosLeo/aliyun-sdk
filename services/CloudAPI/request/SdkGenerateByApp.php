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
 * @method $this setLanguage($Language)
 * @method string getLanguage()
 */
final class SdkGenerateByApp extends CloudAPICommon
{
    public $action = 'SdkGenerateByApp';
}
