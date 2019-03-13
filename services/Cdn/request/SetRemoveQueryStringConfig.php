<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAliRemoveArgs($AliRemoveArgs)
 * @method string getAliRemoveArgs()
 * @method $this setKeepOssArgs($KeepOssArgs)
 * @method string getKeepOssArgs()
 */
final class SetRemoveQueryStringConfig extends CdnCommon
{
    public $action = 'SetRemoveQueryStringConfig';
}
