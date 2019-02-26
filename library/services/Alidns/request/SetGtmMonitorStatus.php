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
 * @method $this setStatus($Status)
 * @method string getStatus()
 */
final class SetGtmMonitorStatus extends AlidnsCommon
{
    public $action = 'SetGtmMonitorStatus';
}
