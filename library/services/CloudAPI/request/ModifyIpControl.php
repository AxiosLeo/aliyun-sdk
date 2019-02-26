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
 * @method $this setIpControlName($IpControlName)
 * @method string getIpControlName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyIpControl extends CloudAPICommon
{
    public $action = 'ModifyIpControl';
}
