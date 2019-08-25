<?php

namespace aliyun\sdk\services\Aegis20161111;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20161111
 *
 * @package aliyun\sdk\services\Aegis20161111
 * @method DescribeSearchCondition DescribeSearchCondition()
 * @method DescribeSuspiciousOverallConfig DescribeSuspiciousOverallConfig()
 * @method TransformLeakage TransformLeakage()
 * @method DescribeHistogram DescribeHistogram()
 * @method DescribeVulConfig DescribeVulConfig()
 * @method ModifySaveVulBatch ModifySaveVulBatch()
 * @method OperateSuspiciousOverallConfig OperateSuspiciousOverallConfig()
 * @method DeleteLogQuery DeleteLogQuery()
 * @method DescribeCheckWarnings DescribeCheckWarnings()
 * @method DescribeDefenceThread DescribeDefenceThread()
 * @method AutoUpgradeSas AutoUpgradeSas()
 * @method AutoUpgradeToSasAdvancedVersion AutoUpgradeToSasAdvancedVersion()
 * @method DescribeAnalysisSlsIndex DescribeAnalysisSlsIndex()
 * @method RollbackSuspEventQuaraFile RollbackSuspEventQuaraFile()
 * @method DescribeVulLevelStatistics DescribeVulLevelStatistics()
 * @method QueryLoginEvent QueryLoginEvent()
 * @method DescribeSecurityStatInfo DescribeSecurityStatInfo()
 * @method CreatScreenSetting CreatScreenSetting()
 * @method CreateLogQuery CreateLogQuery()
 * @method DeleteDingTalk DeleteDingTalk()
 * @method DescribeGroupedVul DescribeGroupedVul()
 * @method DescribeSasAssetStatisticsColumn DescribeSasAssetStatisticsColumn()
 * @method DescribeJoinRuleList DescribeJoinRuleList()
 * @method DownloadLog DownloadLog()
 * @method ExecStrategy ExecStrategy()
 * @method DescribeYesterdayStatistics DescribeYesterdayStatistics()
 * @method DescribeTraceInfoNode DescribeTraceInfoNode()
 * @method ModifySearchCondition ModifySearchCondition()
 * @method DescribeAnalysisHistograms DescribeAnalysisHistograms()
 * @method DescribeVulBatch DescribeVulBatch()
 * @method DescribeCanUpgradeSas DescribeCanUpgradeSas()
 * @method QueryCrackEvent QueryCrackEvent()
 * @method DescribeLogItems DescribeLogItems()
 * @method DescribeWebLockEvents DescribeWebLockEvents()
 * @method DescribeFilterFields DescribeFilterFields()
 * @method CreateUserSetting CreateUserSetting()
 * @method DescribeLogstoreStorage DescribeLogstoreStorage()
 * @method ModifyWebLockStatus ModifyWebLockStatus()
 * @method OperateAgentClientInstall OperateAgentClientInstall()
 * @method DescribeTargetConfig DescribeTargetConfig()
 * @method DescribeResultList DescribeResultList()
 * @method DescribeScreenHostStatistics DescribeScreenHostStatistics()
 * @method DescribeScreenSummaryInfo DescribeScreenSummaryInfo()
 * @method OperateSuspiciousTargetConfig OperateSuspiciousTargetConfig()
 * @method DescribeAssetSummary DescribeAssetSummary()
 * @method DeleteStrategy DeleteStrategy()
 * @method ModifyMachineConfig ModifyMachineConfig()
 * @method DeleteRuleGroup DeleteRuleGroup()
 * @method DescribeWarning DescribeWarning()
 * @method DescribeRisks DescribeRisks()
 * @method ModifyWebLockRefresh ModifyWebLockRefresh()
 * @method DeleteScreenSetting DeleteScreenSetting()
 * @method SaveWhiteListStrategy SaveWhiteListStrategy()
 * @method CreateOrUpdateDataSource CreateOrUpdateDataSource()
 * @method DescribeUuidConfig DescribeUuidConfig()
 * @method ModifyScreenSetting ModifyScreenSetting()
 * @method DescribeAlarmEventList DescribeAlarmEventList()
 * @method ModifyStrategyTarget ModifyStrategyTarget()
 * @method DescribeExportInfo DescribeExportInfo()
 * @method DescribeConcernNecessity DescribeConcernNecessity()
 * @method DeleteRule DeleteRule()
 * @method DescribeTopicList DescribeTopicList()
 * @method DescribeLogShipperStatus DescribeLogShipperStatus()
 * @method DescribeSuspiciousUUIDConfig DescribeSuspiciousUUIDConfig()
 * @method DescribeEcsStsStatus DescribeEcsStsStatus()
 * @method DescribeSlsProject DescribeSlsProject()
 * @method DescribeSuspiciousExportInfo DescribeSuspiciousExportInfo()
 * @method ModifyWebLockDeleteConfig ModifyWebLockDeleteConfig()
 * @method DescribeAllRegionsStatistics DescribeAllRegionsStatistics()
 * @method ValidateHcWarnings ValidateHcWarnings()
 * @method ModifyAssetGroup ModifyAssetGroup()
 * @method ModifyWebLockMachineList ModifyWebLockMachineList()
 * @method ModifyAutoDelConfig ModifyAutoDelConfig()
 * @method DescribeVulNumStatistics DescribeVulNumStatistics()
 * @method DescribeTotalStatistics DescribeTotalStatistics()
 * @method DescribeEmgNotice DescribeEmgNotice()
 * @method DeleteSearchCondition DeleteSearchCondition()
 * @method GetStatisticsByUuid GetStatisticsByUuid()
 * @method DescribeScreenScoreThread DescribeScreenScoreThread()
 * @method DescribeWhiteListStrategyStatistics DescribeWhiteListStrategyStatistics()
 * @method ModifyEmgVulSubmit ModifyEmgVulSubmit()
 * @method DescribeWhiteListStrategyUuidCount DescribeWhiteListStrategyUuidCount()
 * @method DescribeStrategyTarget DescribeStrategyTarget()
 * @method DescribeOperateInfo DescribeOperateInfo()
 * @method DescribeNsasSuspEventType DescribeNsasSuspEventType()
 * @method ModifySasAssetStatisticsColumn ModifySasAssetStatisticsColumn()
 * @method ModifyLogMetaStatus ModifyLogMetaStatus()
 * @method ModifyClearLogstoreStorage ModifyClearLogstoreStorage()
 * @method CreateUserWhiteList CreateUserWhiteList()
 * @method DescribeWhiteListAuthorize DescribeWhiteListAuthorize()
 * @method CreateOrUpdateDingTalk CreateOrUpdateDingTalk()
 * @method DescribeAssetDetailByUuid DescribeAssetDetailByUuid()
 * @method DescribeSuspEventTypes DescribeSuspEventTypes()
 * @method GetEntityList GetEntityList()
 * @method DescribeSuspEventExportInfo DescribeSuspEventExportInfo()
 * @method SetDatasourceStatus SetDatasourceStatus()
 * @method ReleaseInstance ReleaseInstance()
 * @method ModifyOpenLogShipper ModifyOpenLogShipper()
 * @method DescribeVulTargetStatistics DescribeVulTargetStatistics()
 * @method CreateInstance CreateInstance()
 * @method CreateSuspiciousExport CreateSuspiciousExport()
 * @method DescribeVulExportInfo DescribeVulExportInfo()
 * @method ExportVul ExportVul()
 * @method DescribeMacConfig DescribeMacConfig()
 * @method SaveSuspEventUserSetting SaveSuspEventUserSetting()
 * @method DescribeBuySummary DescribeBuySummary()
 * @method DescribeDataSource DescribeDataSource()
 * @method OperateResult OperateResult()
 * @method CreateOrUpdateGroup CreateOrUpdateGroup()
 * @method DescribeSuspEventDetail DescribeSuspEventDetail()
 * @method OperateSuspiciousEvent OperateSuspiciousEvent()
 * @method DescribeStratety DescribeStratety()
 * @method DescribeEventCountCurve DescribeEventCountCurve()
 * @method DescribeWebshell DescribeWebshell()
 * @method CanTrySas CanTrySas()
 * @method DescribeInstanceStatistics DescribeInstanceStatistics()
 * @method DescribeWhiteListProcess DescribeWhiteListProcess()
 * @method ModifyVulTarget ModifyVulTarget()
 * @method GetStatistics GetStatistics()
 * @method DescribeSasAssetStatistics DescribeSasAssetStatistics()
 * @method DescribeScreenAlarmEventList DescribeScreenAlarmEventList()
 * @method DescribeEmgUserAgreement DescribeEmgUserAgreement()
 * @method UpdateWhiteListProcessStatus UpdateWhiteListProcessStatus()
 * @method ModifyVulConfig ModifyVulConfig()
 * @method DescribeTopRiskyAssets DescribeTopRiskyAssets()
 * @method DescribeAnalysisStatistics DescribeAnalysisStatistics()
 * @method GetAccountStatistics GetAccountStatistics()
 * @method Describesummary Describesummary()
 * @method DescribeWebLockConfigList DescribeWebLockConfigList()
 * @method ModifyVulLevel ModifyVulLevel()
 * @method ExportWarning ExportWarning()
 * @method DescribeWhiteListEffectiveAssets DescribeWhiteListEffectiveAssets()
 * @method DescribeCheckWarningSummary DescribeCheckWarningSummary()
 * @method DescribeVulMachineList DescribeVulMachineList()
 * @method DescribeVersionConfig DescribeVersionConfig()
 * @method DescribeEmgVulGroup DescribeEmgVulGroup()
 * @method DescribeLogInfo DescribeLogInfo()
 * @method DescribeEventLevelCount DescribeEventLevelCount()
 * @method ExecuteRuleEngineActualTime ExecuteRuleEngineActualTime()
 * @method DescribeSecureSuggestion DescribeSecureSuggestion()
 * @method DescribeSasLeftCondition DescribeSasLeftCondition()
 * @method DescribeSuspEvents DescribeSuspEvents()
 * @method CreateVulWhitelist CreateVulWhitelist()
 * @method DescribeSummaryInfo DescribeSummaryInfo()
 * @method DescribeScreenSetting DescribeScreenSetting()
 * @method OperateVul OperateVul()
 * @method DeleteVulWhitelist DeleteVulWhitelist()
 * @method DescribeVulLevel DescribeVulLevel()
 * @method DescribeAnalysisShipperStatus DescribeAnalysisShipperStatus()
 * @method DescribeAttackAnalysisData DescribeAttackAnalysisData()
 * @method DescribeAnalysisLogs DescribeAnalysisLogs()
 * @method DescribeSuspiciousEvents DescribeSuspiciousEvents()
 * @method DescribeAssetList DescribeAssetList()
 * @method DescribeRiskWhiteList DescribeRiskWhiteList()
 * @method DescribeRiskType DescribeRiskType()
 * @method DescribeSuspEventUserSetting DescribeSuspEventUserSetting()
 * @method DescribeSuspTrendStatistics DescribeSuspTrendStatistics()
 * @method ModifyWebLockCreateConfig ModifyWebLockCreateConfig()
 * @method DescribeUserSetting DescribeUserSetting()
 * @method DescribeTarget DescribeTarget()
 * @method OpenSasTrial OpenSasTrial()
 * @method DescribeAutoDelConfig DescribeAutoDelConfig()
 * @method DescribeWebLockBindList DescribeWebLockBindList()
 * @method DescribeVulWhitelist DescribeVulWhitelist()
 * @method DeleteJoinRule DeleteJoinRule()
 * @method ExportSuspEvents ExportSuspEvents()
 * @method DescribeAlarmEventDetail DescribeAlarmEventDetail()
 * @method DescribeListAccessKeyIdAuth DescribeListAccessKeyIdAuth()
 * @method ModifyTargetConfig ModifyTargetConfig()
 * @method GetCrackStatistics GetCrackStatistics()
 * @method DescribeGroupStruct DescribeGroupStruct()
 * @method DescribeStratetyDetail DescribeStratetyDetail()
 * @method ModifyWebLockUpdateConfig ModifyWebLockUpdateConfig()
 * @method ModifyWebLockOperateEvents ModifyWebLockOperateEvents()
 * @method DescribeAgentInstallStatus DescribeAgentInstallStatus()
 * @method DescribeLogMeta DescribeLogMeta()
 * @method DescribeVulnerabilitySummary DescribeVulnerabilitySummary()
 * @method CreateOrUpdateRule CreateOrUpdateRule()
 * @method ModifyBatchIgnoreVul ModifyBatchIgnoreVul()
 * @method DescribeStatistics DescribeStatistics()
 * @method DescribeLoginLogs DescribeLoginLogs()
 * @method DescribeAnalysisCurve DescribeAnalysisCurve()
 * @method DescribeScreenSecurityStatInfo DescribeScreenSecurityStatInfo()
 * @method DescribeGroupList DescribeGroupList()
 * @method DescribeTraceInfoDetail DescribeTraceInfoDetail()
 * @method DeleteVulBatch DeleteVulBatch()
 * @method OperationSuspEvents OperationSuspEvents()
 * @method DescribeCheckWarningDetail DescribeCheckWarningDetail()
 * @method DescribeWebLockStatus DescribeWebLockStatus()
 * @method CreateOrUpdateJoinRule CreateOrUpdateJoinRule()
 * @method DescribeVulList DescribeVulList()
 * @method DescribeScreenSettings DescribeScreenSettings()
 * @method DescribeStrategyExecDetail DescribeStrategyExecDetail()
 * @method ModifyConcernNecessity ModifyConcernNecessity()
 * @method DescribeMachineConfig DescribeMachineConfig()
 * @method SaveWhiteListStrategyAssets SaveWhiteListStrategyAssets()
 * @method UpgradeInstance UpgradeInstance()
 * @method ModifyStrategy ModifyStrategy()
 * @method OperateWarning OperateWarning()
 * @method DescribeRuleList DescribeRuleList()
 * @method UpdateWhiteListStrategyStatus UpdateWhiteListStrategyStatus()
 * @method DescribeWarningMachines DescribeWarningMachines()
 * @method DescribeSuspEventQuaraFiles DescribeSuspEventQuaraFiles()
 * @method UpdateWhiteListStrategyRelation UpdateWhiteListStrategyRelation()
 * @method DescribeDingTalk DescribeDingTalk()
 * @method DescribeMetaData DescribeMetaData()
 * @method DescribeCanTrySas DescribeCanTrySas()
 * @method RenewInstance RenewInstance()
 * @method DescribeStrategyProcess DescribeStrategyProcess()
 * @method DescribeScreenVersionConfig DescribeScreenVersionConfig()
 * @method DescribeWebLockMachineList DescribeWebLockMachineList()
 * @method DescribeWhiteListAsset DescribeWhiteListAsset()
 * @method DescribeVulDetails DescribeVulDetails()
 * @method DescribeQuaraFile DescribeQuaraFile()
 * @method DescribeWhiteListStrategyCount DescribeWhiteListStrategyCount()
 * @method DescribeWhiteListStrategyList DescribeWhiteListStrategyList()
 * @method DescribeScreenAttackAnalysisData DescribeScreenAttackAnalysisData()
 * @method DescribeApiBuySummary DescribeApiBuySummary()
 * @method BatchDeleteWhiteList BatchDeleteWhiteList()
 * @method DescribeLogQuery DescribeLogQuery()
 * @method DescribeTraceInfoNodeList DescribeTraceInfoNodeList()
 * @method IgnoreHcCheckWarnings IgnoreHcCheckWarnings()
 * @method DescribeScreenOperateInfo DescribeScreenOperateInfo()
 * @method RollbackQuaraFile RollbackQuaraFile()
 */
class V20161111
{
}

/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSearchCondition extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setType($type)
 * @method string getType()
 */
class DescribeSuspiciousOverallConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class TransformLeakage extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setQuery($query)
 * @method string getQuery()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeHistogram extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setType($type)
 * @method string getType()
 */
class DescribeVulConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 * @method $this setNecessity($necessity)
 * @method string getNecessity()
 * @method $this setBatchName($batchName)
 * @method string getBatchName()
 * @method $this setResource($resource)
 * @method string getResource()
 */
class ModifySaveVulBatch extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class OperateSuspiciousOverallConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setQueryName($queryName)
 * @method string getQueryName()
 */
class DeleteLogQuery extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setRiskId($riskId)
 * @method int getRiskId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeCheckWarnings extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeDefenceThread extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class AutoUpgradeSas extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class AutoUpgradeToSasAdvancedVersion extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeAnalysisSlsIndex extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setQuaraFileId($quaraFileId)
 * @method int getQuaraFileId()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class RollbackSuspEventQuaraFile extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setStartTs($startTs)
 * @method int getStartTs()
 * @method $this setEndTs($endTs)
 * @method int getEndTs()
 */
class DescribeVulLevelStatistics extends Request
{
}/**
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class QueryLoginEvent extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSecurityStatInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setScreenTitle($screenTitle)
 * @method string getScreenTitle()
 * @method $this setScreenIdSetting($screenIdSetting)
 * @method string getScreenIdSetting()
 */
class CreatScreenSetting extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setQueryName($queryName)
 * @method string getQueryName()
 * @method $this setConditions($conditions)
 * @method string getConditions()
 * @method $this setQueryDetail($queryDetail)
 * @method string getQueryDetail()
 */
class CreateLogQuery extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setIds($ids)
 * @method string getIds()
 */
class DeleteDingTalk extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 * @method $this setPatchId($patchId)
 * @method int getPatchId()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setLastTsStart($lastTsStart)
 * @method int getLastTsStart()
 * @method $this setLastTsEnd($lastTsEnd)
 * @method int getLastTsEnd()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setNecessity($necessity)
 * @method string getNecessity()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setCreateTsStart($createTsStart)
 * @method int getCreateTsStart()
 * @method $this setCreateTsEnd($createTsEnd)
 * @method int getCreateTsEnd()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeGroupedVul extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeSasAssetStatisticsColumn extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setremark($remark)
 * @method int getremark()
 * @method $this setWarnLevel($warnLevel)
 * @method string getWarnLevel()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeJoinRuleList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setQuery($query)
 * @method string getQuery()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DownloadLog extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 */
class ExecStrategy extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeYesterdayStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setVertexId($vertexId)
 * @method string getVertexId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setEventName($eventName)
 * @method string getEventName()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeTraceInfoNode extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setFilterConditions($filterConditions)
 * @method string getFilterConditions()
 */
class ModifySearchCondition extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setQuery($query)
 * @method string getQuery()
 * @method $this setFrom($from)
 * @method int getFrom()
 * @method $this setTo($to)
 * @method int getTo()
 */
class DescribeAnalysisHistograms extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResource($resource)
 * @method string getResource()
 */
class DescribeVulBatch extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeCanUpgradeSas extends Request
{
}/**
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class QueryCrackEvent extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setQuery($query)
 * @method string getQuery()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method string getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setAccountSnapshotOffset($accountSnapshotOffset)
 * @method int getAccountSnapshotOffset()
 * @method $this setPortSnapshotOffset($portSnapshotOffset)
 * @method int getPortSnapshotOffset()
 * @method $this setNetworkOffset($networkOffset)
 * @method int getNetworkOffset()
 * @method $this setProcessSnapshotOffset($processSnapshotOffset)
 * @method int getProcessSnapshotOffset()
 * @method $this setLoginOffset($loginOffset)
 * @method int getLoginOffset()
 * @method $this setProcessOffset($processOffset)
 * @method int getProcessOffset()
 * @method $this setCrackOffset($crackOffset)
 * @method int getCrackOffset()
 */
class DescribeLogItems extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setEventName($eventName)
 * @method string getEventName()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeWebLockEvents extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setQuery($query)
 * @method string getQuery()
 */
class DescribeFilterFields extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInvalidWarningKeepDays($invalidWarningKeepDays)
 * @method int getInvalidWarningKeepDays()
 * @method $this setAlertLevels($alertLevels)
 * @method string getAlertLevels()
 */
class CreateUserSetting extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeLogstoreStorage extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class ModifyWebLockStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 */
class OperateAgentClientInstall extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 */
class DescribeTargetConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setUuidList($uuidList)
 * @method string getUuidList()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeResultList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeScreenHostStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeScreenSummaryInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setTargetType($targetType)
 * @method string getTargetType()
 * @method $this setTargetOperations($targetOperations)
 * @method string getTargetOperations()
 */
class OperateSuspiciousTargetConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeAssetSummary extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setId($id)
 * @method string getId()
 */
class DeleteStrategy extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setTarget($target)
 * @method string getTarget()
 */
class ModifyMachineConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setId($id)
 * @method int getId()
 */
class DeleteRuleGroup extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setTypeNames($typeNames)
 * @method string getTypeNames()
 * @method $this setSubTypeNames($subTypeNames)
 * @method string getSubTypeNames()
 * @method $this setRiskLevels($riskLevels)
 * @method string getRiskLevels()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setRiskName($riskName)
 * @method string getRiskName()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 */
class DescribeWarning extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRiskId($riskId)
 * @method int getRiskId()
 * @method $this setRiskName($riskName)
 * @method string getRiskName()
 * @method $this setLimit($limit)
 * @method int getLimit()
 */
class DescribeRisks extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 */
class ModifyWebLockRefresh extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setScreenTitle($screenTitle)
 * @method string getScreenTitle()
 */
class DeleteScreenSetting extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setStrategyName($strategyName)
 * @method string getStrategyName()
 * @method $this setStudyTime($studyTime)
 * @method int getStudyTime()
 */
class SaveWhiteListStrategy extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDatasourceDescription($datasourceDescription)
 * @method string getDatasourceDescription()
 * @method $this setLogStoreName($logStoreName)
 * @method string getLogStoreName()
 * @method $this setFields($fields)
 * @method string getFields()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setRegionNo($regionNo)
 * @method string getRegionNo()
 */
class CreateOrUpdateDataSource extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 */
class DescribeUuidConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setScreenTitle($screenTitle)
 * @method string getScreenTitle()
 * @method $this setScreenIdSetting($screenIdSetting)
 * @method string getScreenIdSetting()
 */
class ModifyScreenSetting extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setFrom($from)
 * @method string getFrom()
 * @method $this setLevels($levels)
 * @method string getLevels()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setAlarmEventName($alarmEventName)
 * @method string getAlarmEventName()
 * @method $this setAlarmEventType($alarmEventType)
 * @method string getAlarmEventType()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class DescribeAlarmEventList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfig($config)
 * @method string getConfig()
 * @method $this setTarget($target)
 * @method string getTarget()
 */
class ModifyStrategyTarget extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setExportId($exportId)
 * @method int getExportId()
 */
class DescribeExportInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeConcernNecessity extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setId($id)
 * @method string getId()
 */
class DeleteRule extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeTopicList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeLogShipperStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 */
class DescribeSuspiciousUUIDConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeEcsStsStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setRegionNo($regionNo)
 * @method string getRegionNo()
 */
class DescribeSlsProject extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setExportId($exportId)
 * @method int getExportId()
 */
class DescribeSuspiciousExportInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 */
class ModifyWebLockDeleteConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setWebGroupId($webGroupId)
 * @method int getWebGroupId()
 * @method $this setRuleType($ruleType)
 * @method int getRuleType()
 * @method $this setAction1($action1)
 * @method int getAction1()
 * @method $this setFlow($flow)
 * @method int getFlow()
 * @method $this setSaleId($saleId)
 * @method string getSaleId()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSecureToken($secureToken)
 * @method string getSecureToken()
 */
class DescribeAllRegionsStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setRiskIds($riskIds)
 * @method string getRiskIds()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 */
class ValidateHcWarnings extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 */
class ModifyAssetGroup extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 */
class ModifyWebLockMachineList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDays($days)
 * @method int getDays()
 */
class ModifyAutoDelConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setStartTs($startTs)
 * @method int getStartTs()
 * @method $this setEndTs($endTs)
 * @method int getEndTs()
 * @method $this setCreateTsStart($createTsStart)
 * @method int getCreateTsStart()
 * @method $this setCreateTsEnd($createTsEnd)
 * @method int getCreateTsEnd()
 */
class DescribeVulNumStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setWebGroupId($webGroupId)
 * @method int getWebGroupId()
 * @method $this setRuleType($ruleType)
 * @method int getRuleType()
 * @method $this setAction1($action1)
 * @method int getAction1()
 * @method $this setFlow($flow)
 * @method int getFlow()
 * @method $this setSaleId($saleId)
 * @method string getSaleId()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSecureToken($secureToken)
 * @method string getSecureToken()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeTotalStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeEmgNotice extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setName($name)
 * @method string getName()
 */
class DeleteSearchCondition extends Request
{
}/**
 * @method $this setUuid($uuid)
 * @method string getUuid()
 */
class GetStatisticsByUuid extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class DescribeScreenScoreThread extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStrategyIds($strategyIds)
 * @method string getStrategyIds()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeWhiteListStrategyStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setUserAgreement($userAgreement)
 * @method string getUserAgreement()
 */
class ModifyEmgVulSubmit extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setType($type)
 * @method int getType()
 */
class DescribeWhiteListStrategyUuidCount extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class DescribeStrategyTarget extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeOperateInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeNsasSuspEventType extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setStatisticsColumn($statisticsColumn)
 * @method string getStatisticsColumn()
 */
class ModifySasAssetStatisticsColumn extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrom($from)
 * @method string getFrom()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setLogStore($logStore)
 * @method string getLogStore()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class ModifyLogMetaStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class ModifyClearLogstoreStorage extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setRiskIdList($riskIdList)
 * @method string getRiskIdList()
 * @method $this setReason($reason)
 * @method string getReason()
 */
class CreateUserWhiteList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeWhiteListAuthorize extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setRuleActionName($ruleActionName)
 * @method string getRuleActionName()
 * @method $this setSendUrl($sendUrl)
 * @method string getSendUrl()
 * @method $this setIntervalTime($intervalTime)
 * @method int getIntervalTime()
 */
class CreateOrUpdateDingTalk extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeAssetDetailByUuid extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeSuspEventTypes extends Request
{
}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setRegionNo($regionNo)
 * @method string getRegionNo()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetEntityList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setExportId($exportId)
 * @method int getExportId()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeSuspEventExportInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLogStoreName($logStoreName)
 * @method string getLogStoreName()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setRegionNo($regionNo)
 * @method string getRegionNo()
 */
class SetDatasourceStatus extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ReleaseInstance extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class ModifyOpenLogShipper extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setType($type)
 * @method string getType()
 */
class DescribeVulTargetStatistics extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setVersionCode($versionCode)
 * @method int getVersionCode()
 * @method $this setVmNumber($vmNumber)
 * @method int getVmNumber()
 * @method $this setIsAutoRenew($isAutoRenew)
 * @method bool getIsAutoRenew()
 * @method $this setAutoRenewDuration($autoRenewDuration)
 * @method int getAutoRenewDuration()
 */
class CreateInstance extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setEventNameRemark($eventNameRemark)
 * @method string getEventNameRemark()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setTag($tag)
 * @method string getTag()
 */
class CreateSuspiciousExport extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setExportId($exportId)
 * @method int getExportId()
 */
class DescribeVulExportInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 * @method $this setBatchName($batchName)
 * @method string getBatchName()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setNecessity($necessity)
 * @method string getNecessity()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 */
class ExportVul extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTypes($types)
 * @method string getTypes()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfig($config)
 * @method string getConfig()
 * @method $this setExtern($extern)
 * @method string getExtern()
 */
class DescribeMacConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLevelsOn($levelsOn)
 * @method string getLevelsOn()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class SaveSuspEventUserSetting extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeBuySummary extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class DescribeDataSource extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setIds($ids)
 * @method string getIds()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class OperateResult extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setMachineGroupIds($machineGroupIds)
 * @method string getMachineGroupIds()
 * @method $this setRuleIds($ruleIds)
 * @method string getRuleIds()
 */
class CreateOrUpdateGroup extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setSuspiciousEventId($suspiciousEventId)
 * @method int getSuspiciousEventId()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeSuspEventDetail extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setOperateType($operateType)
 * @method string getOperateType()
 * @method $this setData($data)
 * @method string getData()
 */
class OperateSuspiciousEvent extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStrategyIds($strategyIds)
 * @method string getStrategyIds()
 */
class DescribeStratety extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setTypes($types)
 * @method string getTypes()
 * @method $this setLastDays($lastDays)
 * @method int getLastDays()
 * @method $this setVulEventLevels($vulEventLevels)
 * @method string getVulEventLevels()
 * @method $this setSuspiciousEventLevels($suspiciousEventLevels)
 * @method string getSuspiciousEventLevels()
 * @method $this setHealthEventLevels($healthEventLevels)
 * @method string getHealthEventLevels()
 */
class DescribeEventCountCurve extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setTag($tag)
 * @method int getTag()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 */
class DescribeWebshell extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class CanTrySas extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 */
class DescribeInstanceStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setProcessName($processName)
 * @method string getProcessName()
 * @method $this setProcessType($processType)
 * @method int getProcessType()
 * @method $this setOrderBy($orderBy)
 * @method int getOrderBy()
 * @method $this setDesc($desc)
 * @method int getDesc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeWhiteListProcess extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setConfig($config)
 * @method string getConfig()
 * @method $this setTarget($target)
 * @method string getTarget()
 */
class ModifyVulTarget extends Request
{
}/**
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class GetStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setStatisticsColumn($statisticsColumn)
 * @method string getStatisticsColumn()
 */
class DescribeSasAssetStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setFrom($from)
 * @method string getFrom()
 * @method $this setLevels($levels)
 * @method string getLevels()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setAlarmEventName($alarmEventName)
 * @method string getAlarmEventName()
 * @method $this setAlarmEventType($alarmEventType)
 * @method string getAlarmEventType()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class DescribeScreenAlarmEventList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeEmgUserAgreement extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setProcessIds($processIds)
 * @method string getProcessIds()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class UpdateWhiteListProcessStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class ModifyVulConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeTopRiskyAssets extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeAnalysisStatistics extends Request
{
}/**
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class GetAccountStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setTypeNames($typeNames)
 * @method string getTypeNames()
 * @method $this setSubTypeNames($subTypeNames)
 * @method string getSubTypeNames()
 * @method $this setRiskLevels($riskLevels)
 * @method string getRiskLevels()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setRiskName($riskName)
 * @method string getRiskName()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class Describesummary extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 */
class DescribeWebLockConfigList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setConcernLevel($concernLevel)
 * @method string getConcernLevel()
 */
class ModifyVulLevel extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setTypeName($typeName)
 * @method string getTypeName()
 * @method $this setTypeNames($typeNames)
 * @method string getTypeNames()
 * @method $this setSubTypeNames($subTypeNames)
 * @method string getSubTypeNames()
 * @method $this setRiskLevels($riskLevels)
 * @method string getRiskLevels()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setRiskName($riskName)
 * @method string getRiskName()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setIsSummaryExport($isSummaryExport)
 * @method int getIsSummaryExport()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setRiskIds($riskIds)
 * @method string getRiskIds()
 * @method $this setExportType($exportType)
 * @method string getExportType()
 */
class ExportWarning extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setNeedStatistics($needStatistics)
 * @method int getNeedStatistics()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeWhiteListEffectiveAssets extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTypeName($typeName)
 * @method string getTypeName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setRiskStatus($riskStatus)
 * @method int getRiskStatus()
 * @method $this setRiskName($riskName)
 * @method string getRiskName()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeCheckWarningSummary extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setStartTs($startTs)
 * @method int getStartTs()
 * @method $this setEndTs($endTs)
 * @method int getEndTs()
 */
class DescribeVulMachineList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeVersionConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeEmgVulGroup extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setQuery($query)
 * @method string getQuery()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method string getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class DescribeLogInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeEventLevelCount extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class ExecuteRuleEngineActualTime extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSecureSuggestion extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setFilterConditions($filterConditions)
 * @method string getFilterConditions()
 * @method $this setConditionType($conditionType)
 * @method string getConditionType()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSasLeftCondition extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLevels($levels)
 * @method string getLevels()
 * @method $this setParentEventTypes($parentEventTypes)
 * @method string getParentEventTypes()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method string getCurrentPage()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setAlarmUniqueInfo($alarmUniqueInfo)
 * @method string getAlarmUniqueInfo()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeSuspEvents extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setWhitelist($whitelist)
 * @method string getWhitelist()
 * @method $this setReason($reason)
 * @method string getReason()
 */
class CreateVulWhitelist extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSummaryInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setScreenTitle($screenTitle)
 * @method string getScreenTitle()
 */
class DescribeScreenSetting extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInfo($info)
 * @method string getInfo()
 * @method $this setOperateType($operateType)
 * @method string getOperateType()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setReason($reason)
 * @method string getReason()
 */
class OperateVul extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setWhitelist($whitelist)
 * @method string getWhitelist()
 */
class DeleteVulWhitelist extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeVulLevel extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeAnalysisShipperStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setBase64($base64)
 * @method string getBase64()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeAttackAnalysisData extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setQuery($query)
 * @method string getQuery()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFrom($from)
 * @method int getFrom()
 * @method $this setTo($to)
 * @method int getTo()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setReverse($reverse)
 * @method bool getReverse()
 */
class DescribeAnalysisLogs extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 */
class DescribeSuspiciousEvents extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setFilterConditions($filterConditions)
 * @method string getFilterConditions()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeAssetList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setRiskName($riskName)
 * @method string getRiskName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeRiskWhiteList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 */
class DescribeRiskType extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeSuspEventUserSetting extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeSuspTrendStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setDir($dir)
 * @method string getDir()
 * @method $this setExclusiveDir($exclusiveDir)
 * @method string getExclusiveDir()
 * @method $this setExclusiveFileType($exclusiveFileType)
 * @method string getExclusiveFileType()
 * @method $this setLocalBackupDir($localBackupDir)
 * @method string getLocalBackupDir()
 */
class ModifyWebLockCreateConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeUserSetting extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class DescribeTarget extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setBuyVersion($buyVersion)
 * @method string getBuyVersion()
 */
class OpenSasTrial extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeAutoDelConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeWebLockBindList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeVulWhitelist extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setIds($ids)
 * @method string getIds()
 */
class DeleteJoinRule extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setTimeStart($timeStart)
 * @method string getTimeStart()
 * @method $this setTimeEnd($timeEnd)
 * @method string getTimeEnd()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLevels($levels)
 * @method string getLevels()
 * @method $this setParentEventTypes($parentEventTypes)
 * @method string getParentEventTypes()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class ExportSuspEvents extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setAlarmUniqueInfo($alarmUniqueInfo)
 * @method string getAlarmUniqueInfo()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeAlarmEventDetail extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeListAccessKeyIdAuth extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class ModifyTargetConfig extends Request
{
}/**
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class GetCrackStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setremark($remark)
 * @method string getremark()
 * @method $this settagIdList($tagIdList)
 * @method string gettagIdList()
 */
class DescribeGroupStruct extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeStratetyDetail extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setDir($dir)
 * @method string getDir()
 * @method $this setExclusiveDir($exclusiveDir)
 * @method string getExclusiveDir()
 * @method $this setExclusiveFileType($exclusiveFileType)
 * @method string getExclusiveFileType()
 * @method $this setLocalBackupDir($localBackupDir)
 * @method string getLocalBackupDir()
 */
class ModifyWebLockUpdateConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setEventIds($eventIds)
 * @method string getEventIds()
 */
class ModifyWebLockOperateEvents extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 */
class DescribeAgentInstallStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeLogMeta extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCronJobId($cronJobId)
 * @method string getCronJobId()
 */
class DescribeVulnerabilitySummary extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setWarnLevel($warnLevel)
 * @method string getWarnLevel()
 * @method $this setExpressions($expressions)
 * @method string getExpressions()
 * @method $this setDataSourceId($dataSourceId)
 * @method int getDataSourceId()
 * @method $this setRuleGroupIds($ruleGroupIds)
 * @method string getRuleGroupIds()
 * @method $this setActions($actions)
 * @method string getActions()
 * @method $this setStatisticsRules($statisticsRules)
 * @method string getStatisticsRules()
 */
class CreateOrUpdateRule extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInfo($info)
 * @method string getInfo()
 * @method $this setReason($reason)
 * @method string getReason()
 */
class ModifyBatchIgnoreVul extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeStatistics extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setStatuses($statuses)
 * @method string getStatuses()
 * @method $this setTypes($types)
 * @method string getTypes()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class DescribeLoginLogs extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setStartTimeStamp($startTimeStamp)
 * @method int getStartTimeStamp()
 * @method $this setEndTimeStamp($endTimeStamp)
 * @method int getEndTimeStamp()
 */
class DescribeAnalysisCurve extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeScreenSecurityStatInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRuleGroupId($ruleGroupId)
 * @method int getRuleGroupId()
 * @method $this setWarnLevel($warnLevel)
 * @method string getWarnLevel()
 * @method $this setExGroupId($exGroupId)
 * @method int getExGroupId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeGroupList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setVertexId($vertexId)
 * @method string getVertexId()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeTraceInfoDetail extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setBatchName($batchName)
 * @method string getBatchName()
 * @method $this setResource($resource)
 * @method string getResource()
 */
class DeleteVulBatch extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setSuspiciousEventIds($suspiciousEventIds)
 * @method string getSuspiciousEventIds()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setSubOperation($subOperation)
 * @method string getSubOperation()
 * @method $this setFrom($from)
 * @method string getFrom()
 * @method $this setWarnType($warnType)
 * @method string getWarnType()
 */
class OperationSuspEvents extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setCheckWarningId($checkWarningId)
 * @method int getCheckWarningId()
 */
class DescribeCheckWarningDetail extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeWebLockStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setActions($actions)
 * @method string getActions()
 * @method $this setDataSourceId1($dataSourceId1)
 * @method int getDataSourceId1()
 * @method $this setDataSourceId2($dataSourceId2)
 * @method int getDataSourceId2()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setExpression1($expression1)
 * @method string getExpression1()
 * @method $this setExpression2($expression2)
 * @method string getExpression2()
 * @method $this setJoinRelation($joinRelation)
 * @method string getJoinRelation()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setStatisticsRules($statisticsRules)
 * @method string getStatisticsRules()
 * @method $this setTimeWindow($timeWindow)
 * @method int getTimeWindow()
 * @method $this setWarnLevel($warnLevel)
 * @method string getWarnLevel()
 */
class CreateOrUpdateJoinRule extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setNecessity($necessity)
 * @method string getNecessity()
 * @method $this setDealed($dealed)
 * @method string getDealed()
 * @method $this setBatchName($batchName)
 * @method string getBatchName()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setCreateTsStart($createTsStart)
 * @method int getCreateTsStart()
 * @method $this setCreateTsEnd($createTsEnd)
 * @method int getCreateTsEnd()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeVulList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeScreenSettings extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 */
class DescribeStrategyExecDetail extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setConcernNecessity($concernNecessity)
 * @method string getConcernNecessity()
 */
class ModifyConcernNecessity extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTypes($types)
 * @method string getTypes()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfig($config)
 * @method string getConfig()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeMachineConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setOperations($operations)
 * @method string getOperations()
 * @method $this setRelationType($relationType)
 * @method int getRelationType()
 */
class SaveWhiteListStrategyAssets extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setVersionCode($versionCode)
 * @method int getVersionCode()
 * @method $this setVmNumber($vmNumber)
 * @method int getVmNumber()
 */
class UpgradeInstance extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setCycleDays($cycleDays)
 * @method string getCycleDays()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setCycleStartTime($cycleStartTime)
 * @method string getCycleStartTime()
 * @method $this setRiskSubTypeName($riskSubTypeName)
 * @method string getRiskSubTypeName()
 * @method $this setId($id)
 * @method string getId()
 */
class ModifyStrategy extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setOperateType($operateType)
 * @method string getOperateType()
 * @method $this setRiskWarningIds($riskWarningIds)
 * @method string getRiskWarningIds()
 * @method $this setReason($reason)
 * @method string getReason()
 */
class OperateWarning extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setExGroupId($exGroupId)
 * @method string getExGroupId()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setWarnLevel($warnLevel)
 * @method string getWarnLevel()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeRuleList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStrategyIds($strategyIds)
 * @method string getStrategyIds()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class UpdateWhiteListStrategyStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setMachineName($machineName)
 * @method string getMachineName()
 * @method $this setUuids($uuids)
 * @method string getUuids()
 * @method $this setRiskId($riskId)
 * @method int getRiskId()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeWarningMachines extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setCurrentPage($currentPage)
 * @method string getCurrentPage()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeSuspEventQuaraFiles extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setProcessMethod($processMethod)
 * @method int getProcessMethod()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class UpdateWhiteListStrategyRelation extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setRuleActionName($ruleActionName)
 * @method string getRuleActionName()
 */
class DescribeDingTalk extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLogStoreName($logStoreName)
 * @method string getLogStoreName()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setRegionNo($regionNo)
 * @method string getRegionNo()
 */
class DescribeMetaData extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeCanTrySas extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setVmNumber($vmNumber)
 * @method string getVmNumber()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 */
class RenewInstance extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 */
class DescribeStrategyProcess extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeScreenVersionConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeWebLockMachineList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setLastMaxId($lastMaxId)
 * @method int getLastMaxId()
 * @method $this setStrategyId($strategyId)
 * @method int getStrategyId()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeWhiteListAsset extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 */
class DescribeVulDetails extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeQuaraFile extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeWhiteListStrategyCount extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStrategyIds($strategyIds)
 * @method string getStrategyIds()
 */
class DescribeWhiteListStrategyList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setBase64($base64)
 * @method string getBase64()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeScreenAttackAnalysisData extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeApiBuySummary extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setRiskIdList($riskIdList)
 * @method string getRiskIdList()
 */
class BatchDeleteWhiteList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeLogQuery extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setVertexId($vertexId)
 * @method string getVertexId()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setStartType($startType)
 * @method string getStartType()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFrom($from)
 * @method string getFrom()
 */
class DescribeTraceInfoNodeList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setCheckWarningIds($checkWarningIds)
 * @method string getCheckWarningIds()
 * @method $this setRiskId($riskId)
 * @method string getRiskId()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setReason($reason)
 * @method string getReason()
 */
class IgnoreHcCheckWarnings extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeScreenOperateInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setEventName($eventName)
 * @method string getEventName()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 */
class RollbackQuaraFile extends Request
{
}
