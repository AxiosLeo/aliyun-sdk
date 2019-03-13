<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setAddrPoolId($AddrPoolId)
 * @method string getAddrPoolId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setProtocolType($ProtocolType)
 * @method string getProtocolType()
 * @method $this setInterval($Interval)
 * @method integer getInterval()
 * @method $this setEvaluationCount($EvaluationCount)
 * @method integer getEvaluationCount()
 * @method $this setTimeout($Timeout)
 * @method integer getTimeout()
 * @method $this setMonitorExtendInfo($MonitorExtendInfo)
 * @method string getMonitorExtendInfo()
 * @method $this setIspCityNode($IspCityNode)
 * @method array getIspCityNode()
 */
final class AddGtmMonitor extends AlidnsCommon
{
    public $action = 'AddGtmMonitor';
}
