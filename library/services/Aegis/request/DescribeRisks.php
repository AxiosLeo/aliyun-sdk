<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setRiskId($RiskId)
 * @method integer getRiskId()
 * @method $this setRiskName($RiskName)
 * @method string getRiskName()
 * @method $this setLimit($Limit)
 * @method integer getLimit()
 */
final class DescribeRisks extends AegisCommon
{
    public $action = 'DescribeRisks';
}
