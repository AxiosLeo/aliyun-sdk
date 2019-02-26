<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setOperateType($OperateType)
 * @method string getOperateType()
 * @method $this setData($Data)
 * @method string getData()
 */
final class OperateSuspiciousEvent extends AegisCommon
{
    public $action = 'OperateSuspiciousEvent';
}
