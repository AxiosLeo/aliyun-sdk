<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setKey($Key)
 * @method string getKey()
 * @method $this setValue($Value)
 * @method string getValue()
 * @method $this setConfigId($ConfigId)
 * @method integer getConfigId()
 */
final class SetReqHeaderConfig extends CdnCommon
{
    public $action = 'SetReqHeaderConfig';
}
