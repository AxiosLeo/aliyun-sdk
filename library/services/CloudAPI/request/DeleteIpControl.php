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
 */
final class DeleteIpControl extends CloudAPICommon
{
    public $action = 'DeleteIpControl';
}
