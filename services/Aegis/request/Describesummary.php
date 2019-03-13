<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setUuids($Uuids)
 * @method string getUuids()
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
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 * @method $this setStrategyId($StrategyId)
 * @method integer getStrategyId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 */
final class Describesummary extends AegisCommon
{
    public $action = 'Describesummary';
}
