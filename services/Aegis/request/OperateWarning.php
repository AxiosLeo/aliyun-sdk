<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setOperateType($OperateType)
 * @method string getOperateType()
 * @method $this setRiskWarningIds($RiskWarningIds)
 * @method string getRiskWarningIds()
 * @method $this setReason($Reason)
 * @method string getReason()
 */
final class OperateWarning extends AegisCommon
{
    public $action = 'OperateWarning';
}
