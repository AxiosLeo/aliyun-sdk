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
 */
final class SetOptimizeConfig extends CdnCommon
{
    public $action = 'SetOptimizeConfig';
}
