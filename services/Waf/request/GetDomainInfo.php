<?php
namespace aliyun\sdk\services\Waf\request;

use aliyun\sdk\services\Waf\WafCommon;

/**
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setDomain($Domain)
 * @method string getDomain()
 */
final class GetDomainInfo extends WafCommon
{
    public $action = 'GetDomainInfo';
}
