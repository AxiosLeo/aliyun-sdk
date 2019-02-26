<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setHttp2($Http2)
 * @method string getHttp2()
 */
final class SetHttpsOptionConfig extends CdnCommon
{
    public $action = 'SetHttpsOptionConfig';
}
