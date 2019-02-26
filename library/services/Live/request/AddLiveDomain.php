<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setLiveDomainType($LiveDomainType)
 * @method string getLiveDomainType()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setCheckUrl($CheckUrl)
 * @method string getCheckUrl()
 * @method $this setScope($Scope)
 * @method string getScope()
 * @method $this setTopLevelDomain($TopLevelDomain)
 * @method string getTopLevelDomain()
 */
final class AddLiveDomain extends LiveCommon
{
    public $action = 'AddLiveDomain';
}
