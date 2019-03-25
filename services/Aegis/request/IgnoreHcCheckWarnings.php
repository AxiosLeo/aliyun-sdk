<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setCheckWarningIds($CheckWarningIds)
 * @method string getCheckWarningIds()
 * @method $this setRiskId($RiskId)
 * @method string getRiskId()
 * @method $this setType($Type)
 * @method integer getType()
 * @method $this setReason($Reason)
 * @method string getReason()
 */
final class IgnoreHcCheckWarnings extends AegisCommon
{
    public $action = 'IgnoreHcCheckWarnings';
}
