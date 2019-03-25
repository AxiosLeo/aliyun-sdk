<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUuids($Uuids)
 * @method string getUuids()
 * @method $this setTypeName($TypeName)
 * @method string getTypeName()
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
 * @method $this setIsSummaryExport($IsSummaryExport)
 * @method integer getIsSummaryExport()
 * @method $this setStrategyId($StrategyId)
 * @method integer getStrategyId()
 * @method $this setRiskIds($RiskIds)
 * @method string getRiskIds()
 * @method $this setExportType($ExportType)
 * @method string getExportType()
 */
final class ExportWarning extends AegisCommon
{
    public $action = 'ExportWarning';
}
