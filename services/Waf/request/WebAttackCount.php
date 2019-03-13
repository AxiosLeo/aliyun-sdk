<?php
namespace aliyun\sdk\services\Waf\request;

use aliyun\sdk\services\Waf\WafCommon;

/**
 * @method $this setTime($Time)
 * @method string getTime()
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setDomains($Domains)
 * @method string getDomains()
 */
final class WebAttackCount extends WafCommon
{
    public $action = 'WebAttackCount';
}
