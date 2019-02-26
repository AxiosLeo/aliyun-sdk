<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setFunctionName($FunctionName)
 * @method string getFunctionName()
 * @method $this setConfigId($ConfigId)
 * @method string getConfigId()
 */
final class DeleteSpecificConfig extends CdnCommon
{
    public $action = 'DeleteSpecificConfig';
}
