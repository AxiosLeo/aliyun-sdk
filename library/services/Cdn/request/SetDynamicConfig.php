<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setDynamicOrigin($DynamicOrigin)
 * @method string getDynamicOrigin()
 * @method $this setStaticType($StaticType)
 * @method string getStaticType()
 * @method $this setStaticUri($StaticUri)
 * @method string getStaticUri()
 * @method $this setStaticPath($StaticPath)
 * @method string getStaticPath()
 * @method $this setDynamicCacheControl($DynamicCacheControl)
 * @method string getDynamicCacheControl()
 */
final class SetDynamicConfig extends CdnCommon
{
    public $action = 'SetDynamicConfig';
}
