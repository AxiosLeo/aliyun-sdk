<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setFunctionNames($FunctionNames)
 * @method string getFunctionNames()
 */
final class DescribeVodDomainConfigs extends VodCommon
{
    public $action = 'DescribeVodDomainConfigs';
}
