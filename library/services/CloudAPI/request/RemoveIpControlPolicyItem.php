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
 * @method $this setPolicyItemIds($PolicyItemIds)
 * @method string getPolicyItemIds()
 */
final class RemoveIpControlPolicyItem extends CloudAPICommon
{
    public $action = 'RemoveIpControlPolicyItem';
}
