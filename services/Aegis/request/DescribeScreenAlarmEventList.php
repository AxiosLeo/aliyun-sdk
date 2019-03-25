<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 * @method $this setFrom($From)
 * @method string getFrom()
 * @method $this setLevels($Levels)
 * @method string getLevels()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setAlarmEventName($AlarmEventName)
 * @method string getAlarmEventName()
 * @method $this setAlarmEventType($AlarmEventType)
 * @method string getAlarmEventType()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method string getPageSize()
 */
final class DescribeScreenAlarmEventList extends AegisCommon
{
    public $action = 'DescribeScreenAlarmEventList';
}
