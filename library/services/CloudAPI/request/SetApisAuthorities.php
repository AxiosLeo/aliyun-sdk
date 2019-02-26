<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setAppId($AppId)
 * @method integer getAppId()
 * @method $this setStageName($StageName)
 * @method string getStageName()
 * @method $this setApiIds($ApiIds)
 * @method string getApiIds()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setAuthVaildTime($AuthVaildTime)
 * @method string getAuthVaildTime()
 * @method $this setAuthValidTime($AuthValidTime)
 * @method string getAuthValidTime()
 */
final class SetApisAuthorities extends CloudAPICommon
{
    public $action = 'SetApisAuthorities';
}
