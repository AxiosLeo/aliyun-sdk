<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIpControlId($IpControlId)
 * @method string getIpControlId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setApiIds($ApiIds)
 * @method string getApiIds()
 * @method $this setStageName($StageName)
 * @method string getStageName()
 */
final class RemoveIpControlApis extends CloudAPICommon
{
    public $action = 'RemoveIpControlApis';
}
