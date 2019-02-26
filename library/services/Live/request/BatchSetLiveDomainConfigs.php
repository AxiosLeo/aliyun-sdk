<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainNames($DomainNames)
 * @method string getDomainNames()
 * @method $this setFunctions($Functions)
 * @method string getFunctions()
 */
final class BatchSetLiveDomainConfigs extends LiveCommon
{
    public $action = 'BatchSetLiveDomainConfigs';
}
