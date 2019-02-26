<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setReferType($ReferType)
 * @method string getReferType()
 * @method $this setReferList($ReferList)
 * @method string getReferList()
 * @method $this setAllowEmpty($AllowEmpty)
 * @method string getAllowEmpty()
 * @method $this setDisableAst($DisableAst)
 * @method string getDisableAst()
 */
final class SetRefererConfig extends CdnCommon
{
    public $action = 'SetRefererConfig';
}
