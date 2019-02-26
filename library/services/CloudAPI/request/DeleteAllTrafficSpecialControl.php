<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTrafficControlId($TrafficControlId)
 * @method string getTrafficControlId()
 */
final class DeleteAllTrafficSpecialControl extends CloudAPICommon
{
    public $action = 'DeleteAllTrafficSpecialControl';
}
