<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setFunctionNames($FunctionNames)
 * @method string getFunctionNames()
 */
final class DescribeLiveDomainConfigs extends LiveCommon
{
    public $action = 'DescribeLiveDomainConfigs';
}
