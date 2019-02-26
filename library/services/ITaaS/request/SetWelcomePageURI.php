<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSysFrom($SysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($Operator)
 * @method string getOperator()
 * @method $this setWelcomeUri($WelcomeUri)
 * @method string getWelcomeUri()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 */
final class SetWelcomePageURI extends ITaaSCommon
{
    public $action = 'SetWelcomePageURI';
}
