<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setPageType($PageType)
 * @method string getPageType()
 * @method $this setCustomPageUrl($CustomPageUrl)
 * @method string getCustomPageUrl()
 */
final class SetErrorPageConfig extends CdnCommon
{
    public $action = 'SetErrorPageConfig';
}
