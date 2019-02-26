<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setEnable($Enable)
 * @method string getEnable()
 */
final class SetDomainGreenManagerConfig extends CdnCommon
{
    public $action = 'SetDomainGreenManagerConfig';
}
