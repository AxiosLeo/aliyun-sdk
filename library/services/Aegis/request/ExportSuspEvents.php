<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 * @method $this setTimeStart($TimeStart)
 * @method string getTimeStart()
 * @method $this setTimeEnd($TimeEnd)
 * @method string getTimeEnd()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setLevels($Levels)
 * @method string getLevels()
 * @method $this setParentEventTypes($ParentEventTypes)
 * @method string getParentEventTypes()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setFrom($From)
 * @method string getFrom()
 */
final class ExportSuspEvents extends AegisCommon
{
    public $action = 'ExportSuspEvents';
}
