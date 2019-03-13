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
 * @method $this setAppId($AppId)
 * @method integer getAppId()
 * @method $this setStageName($StageName)
 * @method string getStageName()
 * @method $this setApiIds($ApiIds)
 * @method string getApiIds()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class RemoveApisAuthorities extends CloudAPICommon
{
    public $action = 'RemoveApisAuthorities';
}
