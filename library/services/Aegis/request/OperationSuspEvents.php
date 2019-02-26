<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setSuspiciousEventIds($SuspiciousEventIds)
 * @method string getSuspiciousEventIds()
 * @method $this setOperation($Operation)
 * @method string getOperation()
 * @method $this setSubOperation($SubOperation)
 * @method string getSubOperation()
 * @method $this setFrom($From)
 * @method string getFrom()
 * @method $this setWarnType($WarnType)
 * @method string getWarnType()
 */
final class OperationSuspEvents extends AegisCommon
{
    public $action = 'OperationSuspEvents';
}
