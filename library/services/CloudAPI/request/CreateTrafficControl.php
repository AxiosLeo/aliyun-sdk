<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTrafficControlName($TrafficControlName)
 * @method string getTrafficControlName()
 * @method $this setTrafficControlUnit($TrafficControlUnit)
 * @method string getTrafficControlUnit()
 * @method $this setApiDefault($ApiDefault)
 * @method integer getApiDefault()
 * @method $this setUserDefault($UserDefault)
 * @method integer getUserDefault()
 * @method $this setAppDefault($AppDefault)
 * @method integer getAppDefault()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class CreateTrafficControl extends CloudAPICommon
{
    public $action = 'CreateTrafficControl';
}
