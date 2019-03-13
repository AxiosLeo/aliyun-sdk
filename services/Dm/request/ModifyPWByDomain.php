<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setPassword($Password)
 * @method string getPassword()
 */
final class ModifyPWByDomain extends DmCommon
{
    public $action = 'ModifyPWByDomain';
}
