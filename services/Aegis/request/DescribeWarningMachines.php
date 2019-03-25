<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setMachineName($MachineName)
 * @method string getMachineName()
 * @method $this setUuids($Uuids)
 * @method string getUuids()
 * @method $this setRiskId($RiskId)
 * @method integer getRiskId()
 * @method $this setStrategyId($StrategyId)
 * @method integer getStrategyId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 */
final class DescribeWarningMachines extends AegisCommon
{
    public $action = 'DescribeWarningMachines';
}
