<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setEnable($Enable)
 * @method string getEnable()
 * @method $this setHashKeyArgs($HashKeyArgs)
 * @method string getHashKeyArgs()
 * @method $this setKeepOssArgs($KeepOssArgs)
 * @method string getKeepOssArgs()
 */
final class SetIgnoreQueryStringConfig extends CdnCommon
{
    public $action = 'SetIgnoreQueryStringConfig';
}
