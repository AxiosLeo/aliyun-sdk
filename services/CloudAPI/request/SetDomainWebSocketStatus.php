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
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setActionValue($ActionValue)
 * @method string getActionValue()
 */
final class SetDomainWebSocketStatus extends CloudAPICommon
{
    public $action = 'SetDomainWebSocketStatus';
}
