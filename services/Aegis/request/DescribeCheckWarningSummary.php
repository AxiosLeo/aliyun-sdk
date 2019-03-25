<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setTypeName($TypeName)
 * @method string getTypeName()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setRiskStatus($RiskStatus)
 * @method integer getRiskStatus()
 * @method $this setRiskName($RiskName)
 * @method string getRiskName()
 * @method $this setStrategyId($StrategyId)
 * @method integer getStrategyId()
 * @method $this setUuids($Uuids)
 * @method string getUuids()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 */
final class DescribeCheckWarningSummary extends AegisCommon
{
    public $action = 'DescribeCheckWarningSummary';
}
