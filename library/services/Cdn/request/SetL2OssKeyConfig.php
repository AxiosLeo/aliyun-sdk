<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setPrivateOssAuth($PrivateOssAuth)
 * @method string getPrivateOssAuth()
 */
final class SetL2OssKeyConfig extends CdnCommon
{
    public $action = 'SetL2OssKeyConfig';
}
