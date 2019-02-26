<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setConfigId($ConfigId)
 * @method string getConfigId()
 */
final class ModifyDomainCustomLogConfig extends CdnCommon
{
    public $action = 'ModifyDomainCustomLogConfig';
}
