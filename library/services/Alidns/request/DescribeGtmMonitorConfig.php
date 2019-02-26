<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setMonitorConfigId($MonitorConfigId)
 * @method string getMonitorConfigId()
 */
final class DescribeGtmMonitorConfig extends AlidnsCommon
{
    public $action = 'DescribeGtmMonitorConfig';
}
