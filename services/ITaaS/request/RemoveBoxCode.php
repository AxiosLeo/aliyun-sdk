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
 * @method $this setCode($Code)
 * @method string getCode()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 */
final class RemoveBoxCode extends ITaaSCommon
{
    public $action = 'RemoveBoxCode';
}
