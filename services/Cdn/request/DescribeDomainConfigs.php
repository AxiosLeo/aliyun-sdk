<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setConfigList($ConfigList)
 * @method string getConfigList()
 */
final class DescribeDomainConfigs extends CdnCommon
{
    public $action = 'DescribeDomainConfigs';
}
