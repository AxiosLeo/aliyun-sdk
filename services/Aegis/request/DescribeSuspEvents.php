<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setLevels($Levels)
 * @method string getLevels()
 * @method $this setParentEventTypes($ParentEventTypes)
 * @method string getParentEventTypes()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setPageSize($PageSize)
 * @method string getPageSize()
 * @method $this setCurrentPage($CurrentPage)
 * @method string getCurrentPage()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setAlarmUniqueInfo($AlarmUniqueInfo)
 * @method string getAlarmUniqueInfo()
 * @method $this setFrom($From)
 * @method string getFrom()
 */
final class DescribeSuspEvents extends AegisCommon
{
    public $action = 'DescribeSuspEvents';
}
