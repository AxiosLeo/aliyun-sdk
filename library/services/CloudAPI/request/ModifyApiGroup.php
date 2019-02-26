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
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyApiGroup extends CloudAPICommon
{
    public $action = 'ModifyApiGroup';
}
