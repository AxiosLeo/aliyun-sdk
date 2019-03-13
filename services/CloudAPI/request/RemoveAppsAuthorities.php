<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setApiId($ApiId)
 * @method string getApiId()
 * @method $this setStageName($StageName)
 * @method string getStageName()
 * @method $this setAppIds($AppIds)
 * @method string getAppIds()
 */
final class RemoveAppsAuthorities extends CloudAPICommon
{
    public $action = 'RemoveAppsAuthorities';
}
