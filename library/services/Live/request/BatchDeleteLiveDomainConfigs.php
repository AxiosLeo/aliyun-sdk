<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainNames($DomainNames)
 * @method string getDomainNames()
 * @method $this setFunctionNames($FunctionNames)
 * @method string getFunctionNames()
 */
final class BatchDeleteLiveDomainConfigs extends LiveCommon
{
    public $action = 'BatchDeleteLiveDomainConfigs';
}
