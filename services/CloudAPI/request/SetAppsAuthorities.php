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
 * @method $this setApiId($ApiId)
 * @method string getApiId()
 * @method $this setStageName($StageName)
 * @method string getStageName()
 * @method $this setAppIds($AppIds)
 * @method string getAppIds()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setAuthVaildTime($AuthVaildTime)
 * @method string getAuthVaildTime()
 * @method $this setAuthValidTime($AuthValidTime)
 * @method string getAuthValidTime()
 */
final class SetAppsAuthorities extends CloudAPICommon
{
    public $action = 'SetAppsAuthorities';
}
