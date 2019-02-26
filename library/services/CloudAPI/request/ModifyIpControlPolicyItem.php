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
 * @method $this setPolicyItemId($PolicyItemId)
 * @method string getPolicyItemId()
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setCidrIp($CidrIp)
 * @method string getCidrIp()
 */
final class ModifyIpControlPolicyItem extends CloudAPICommon
{
    public $action = 'ModifyIpControlPolicyItem';
}
