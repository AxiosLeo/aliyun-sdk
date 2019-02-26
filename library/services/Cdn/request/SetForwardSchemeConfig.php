<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setEnable($Enable)
 * @method string getEnable()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setSchemeOrigin($SchemeOrigin)
 * @method string getSchemeOrigin()
 * @method $this setSchemeOriginPort($SchemeOriginPort)
 * @method string getSchemeOriginPort()
 */
final class SetForwardSchemeConfig extends CdnCommon
{
    public $action = 'SetForwardSchemeConfig';
}
