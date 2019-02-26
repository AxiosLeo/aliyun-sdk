<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setSource($Source)
 * @method string getSource()
 */
final class CreateApiGroup extends CloudAPICommon
{
    public $action = 'CreateApiGroup';
}
