<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setFunctionNames($FunctionNames)
 * @method string getFunctionNames()
 */
final class DescribeCdnDomainConfigs extends CdnCommon
{
    public $action = 'DescribeCdnDomainConfigs';
}
