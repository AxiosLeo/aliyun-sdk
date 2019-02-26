<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDomains($Domains)
 * @method string getDomains()
 */
final class RefreshCdnDomainConfigsCache extends MtsCommon
{
    public $action = 'RefreshCdnDomainConfigsCache';
}
