<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setEventNameRemark($EventNameRemark)
 * @method string getEventNameRemark()
 * @method $this setStatusList($StatusList)
 * @method string getStatusList()
 * @method $this setLevel($Level)
 * @method string getLevel()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 * @method $this setEventType($EventType)
 * @method string getEventType()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setTag($Tag)
 * @method string getTag()
 */
final class CreateSuspiciousExport extends AegisCommon
{
    public $action = 'CreateSuspiciousExport';
}
