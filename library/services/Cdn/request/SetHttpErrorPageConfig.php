<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setPageUrl($PageUrl)
 * @method string getPageUrl()
 * @method $this setErrorCode($ErrorCode)
 * @method string getErrorCode()
 */
final class SetHttpErrorPageConfig extends CdnCommon
{
    public $action = 'SetHttpErrorPageConfig';
}
