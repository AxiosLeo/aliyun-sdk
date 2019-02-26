<?php
namespace aliyun\sdk\services\Waf\request;

use aliyun\sdk\services\Waf\WafCommon;

/**
 * @method $this setdays($days)
 * @method integer getdays()
 * @method $this setRegion($Region)
 * @method string getRegion()
 */
final class SummaryStatistics extends WafCommon
{
    public $action = 'SummaryStatistics';
}
