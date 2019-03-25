<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setInfo($Info)
 * @method string getInfo()
 * @method $this setOperateType($OperateType)
 * @method string getOperateType()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setReason($Reason)
 * @method string getReason()
 */
final class OperateVul extends AegisCommon
{
    public $action = 'OperateVul';
}
