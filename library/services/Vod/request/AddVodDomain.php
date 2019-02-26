<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setSources($Sources)
 * @method string getSources()
 * @method $this setCheckUrl($CheckUrl)
 * @method string getCheckUrl()
 * @method $this setScope($Scope)
 * @method string getScope()
 */
final class AddVodDomain extends VodCommon
{
    public $action = 'AddVodDomain';
}
