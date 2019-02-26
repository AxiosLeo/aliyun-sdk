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
 * @method $this setConfigKey($ConfigKey)
 * @method string getConfigKey()
 * @method $this setConfigValue($ConfigValue)
 * @method string getConfigValue()
 * @method $this setMemo($Memo)
 * @method string getMemo()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 */
final class UpdateEnterpriseConfig extends ITaaSCommon
{
    public $action = 'UpdateEnterpriseConfig';
}
