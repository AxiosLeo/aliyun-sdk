<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setHeaderKey($HeaderKey)
 * @method string getHeaderKey()
 * @method $this setHeaderValue($HeaderValue)
 * @method string getHeaderValue()
 * @method $this setConfigId($ConfigId)
 * @method integer getConfigId()
 */
final class SetHttpHeaderConfig extends CdnCommon
{
    public $action = 'SetHttpHeaderConfig';
}
