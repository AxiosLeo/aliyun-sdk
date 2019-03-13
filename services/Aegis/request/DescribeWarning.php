<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setTypeNames($TypeNames)
 * @method string getTypeNames()
 * @method $this setSubTypeNames($SubTypeNames)
 * @method string getSubTypeNames()
 * @method $this setRiskLevels($RiskLevels)
 * @method string getRiskLevels()
 * @method $this setStatusList($StatusList)
 * @method string getStatusList()
 * @method $this setRiskName($RiskName)
 * @method string getRiskName()
 * @method $this setStrategyId($StrategyId)
 * @method integer getStrategyId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setUuids($Uuids)
 * @method string getUuids()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 */
final class DescribeWarning extends AegisCommon
{
    public $action = 'DescribeWarning';
}
