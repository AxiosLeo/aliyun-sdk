<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIpControlName($IpControlName)
 * @method string getIpControlName()
 * @method $this setIpControlType($IpControlType)
 * @method string getIpControlType()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setIpControlPolicys($IpControlPolicys)
 * @method array getIpControlPolicys()
 */
final class CreateIpControl extends CloudAPICommon
{
    public $action = 'CreateIpControl';
}
