<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setAlarmUniqueInfo($AlarmUniqueInfo)
 * @method string getAlarmUniqueInfo()
 * @method $this setFrom($From)
 * @method string getFrom()
 */
final class DescribeAlarmEventDetail extends AegisCommon
{
    public $action = 'DescribeAlarmEventDetail';
}
