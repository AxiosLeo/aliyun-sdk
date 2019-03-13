<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setStrategyId($StrategyId)
 * @method string getStrategyId()
 */
final class DescribeGtmAccessStrategy extends AlidnsCommon
{
    public $action = 'DescribeGtmAccessStrategy';
}
