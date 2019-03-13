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
 * @method $this setDrSessionId($DrSessionId)
 * @method string getDrSessionId()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 */
final class RemoveRegisterBox extends ITaaSCommon
{
    public $action = 'RemoveRegisterBox';
}
