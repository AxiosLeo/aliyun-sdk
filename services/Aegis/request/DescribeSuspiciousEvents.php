<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setUuid($Uuid)
 * @method string getUuid()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setLevel($Level)
 * @method string getLevel()
 * @method $this setEventType($EventType)
 * @method string getEventType()
 */
final class DescribeSuspiciousEvents extends AegisCommon
{
    public $action = 'DescribeSuspiciousEvents';
}
