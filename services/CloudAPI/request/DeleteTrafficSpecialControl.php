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
 * @method $this setSpecialType($SpecialType)
 * @method string getSpecialType()
 * @method $this setSpecialKey($SpecialKey)
 * @method string getSpecialKey()
 */
final class DeleteTrafficSpecialControl extends CloudAPICommon
{
    public $action = 'DeleteTrafficSpecialControl';
}
