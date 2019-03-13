<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setEventName($EventName)
 * @method string getEventName()
 * @method $this setTag($Tag)
 * @method string getTag()
 * @method $this setEventType($EventType)
 * @method string getEventType()
 * @method $this setUuid($Uuid)
 * @method string getUuid()
 */
final class RollbackQuaraFile extends AegisCommon
{
    public $action = 'RollbackQuaraFile';
}
