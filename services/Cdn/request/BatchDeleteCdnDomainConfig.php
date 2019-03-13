<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainNames($DomainNames)
 * @method string getDomainNames()
 * @method $this setFunctionNames($FunctionNames)
 * @method string getFunctionNames()
 */
final class BatchDeleteCdnDomainConfig extends CdnCommon
{
    public $action = 'BatchDeleteCdnDomainConfig';
}
