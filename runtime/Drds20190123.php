<?php

namespace aliyun\sdk\services\Drds20190123;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20190123
 *
 * @package aliyun\sdk\services\Drds20190123
 * @method ModifyDrdsIpWhiteList ModifyDrdsIpWhiteList()
 * @method DescribeStorageInstanceSubDbInfo DescribeStorageInstanceSubDbInfo()
 * @method DescribeInstanceAccounts DescribeInstanceAccounts()
 * @method RestartDrdsInstance RestartDrdsInstance()
 * @method DescribeRdsCommodity DescribeRdsCommodity()
 * @method DescribeDrdsSlowSqls DescribeDrdsSlowSqls()
 * @method DescribeDrdsDbTasks DescribeDrdsDbTasks()
 * @method RearrangeDbToInstance RearrangeDbToInstance()
 * @method DescribeDrdsDbInstance DescribeDrdsDbInstance()
 * @method ChangeInstanceNetwork ChangeInstanceNetwork()
 * @method GetHotDbList GetHotDbList()
 * @method DescribeBackupSets DescribeBackupSets()
 * @method EnableInstanceIpv6Address EnableInstanceIpv6Address()
 * @method UntagResources UntagResources()
 * @method DescribeConsoleConfig DescribeConsoleConfig()
 * @method CheckRdsExpandStatus CheckRdsExpandStatus()
 * @method DescribeBackupDbs DescribeBackupDbs()
 * @method ModifyDrdsInstanceDescription ModifyDrdsInstanceDescription()
 * @method DescribeDbInstances DescribeDbInstances()
 * @method DescribeSrcRdsList DescribeSrcRdsList()
 * @method DescribeDrdsInstances DescribeDrdsInstances()
 * @method DescribeDrdsDBs DescribeDrdsDBs()
 * @method DescribeBackupPolicy DescribeBackupPolicy()
 * @method DescribeDrdsShardingDbs DescribeDrdsShardingDbs()
 * @method DescribeDrdsSqlAuditStatus DescribeDrdsSqlAuditStatus()
 * @method RemoveDrdsInstance RemoveDrdsInstance()
 * @method CreateShardTask CreateShardTask()
 * @method DescribeDrdsDbInstances DescribeDrdsDbInstances()
 * @method DescribeTable DescribeTable()
 * @method DescribeDrdsInstanceMonitor DescribeDrdsInstanceMonitor()
 * @method UpgradeInstanceVersion UpgradeInstanceVersion()
 * @method DescribeRestoreOrder DescribeRestoreOrder()
 * @method SubmitSwitchTask SubmitSwitchTask()
 * @method GetSrcRdsList GetSrcRdsList()
 * @method DescribeDrdsDbRdsNameList DescribeDrdsDbRdsNameList()
 * @method DescribeDrdsInstance DescribeDrdsInstance()
 * @method StartRestore StartRestore()
 * @method SubmitSmoothExpandTask SubmitSmoothExpandTask()
 * @method DescribeInstanceMenuSwitch DescribeInstanceMenuSwitch()
 * @method DescribeDrdsInstanceVersion DescribeDrdsInstanceVersion()
 * @method DescribeRdsSuperAccountInstances DescribeRdsSuperAccountInstances()
 * @method SubmitRollbackTask SubmitRollbackTask()
 * @method DescribeDrdsInstanceDbMonitor DescribeDrdsInstanceDbMonitor()
 * @method DescribeDrdsDB DescribeDrdsDB()
 * @method CheckSqlAuditEnableStatus CheckSqlAuditEnableStatus()
 * @method ValidateShardTask ValidateShardTask()
 * @method SubmitCleanTask SubmitCleanTask()
 * @method DescribeCandidateInstanceList DescribeCandidateInstanceList()
 * @method SetBackupLocal SetBackupLocal()
 * @method DescribeInstDbSlsInfo DescribeInstDbSlsInfo()
 * @method CheckExpandStatus CheckExpandStatus()
 * @method CreateInstanceAccount CreateInstanceAccount()
 * @method GetExpandLogicTableInfoList GetExpandLogicTableInfoList()
 * @method DescribeTableListByType DescribeTableListByType()
 * @method ModifyRdsReadWeight ModifyRdsReadWeight()
 * @method GetLogicTableInfoList GetLogicTableInfoList()
 * @method SubmitHotExpandTask SubmitHotExpandTask()
 * @method DescribeCanExpandInstanceDetailList DescribeCanExpandInstanceDetailList()
 * @method PutStartBackup PutStartBackup()
 * @method DescribeTables DescribeTables()
 * @method DescribeBackupTimes DescribeBackupTimes()
 * @method DescribeInstanceSwitchNetwork DescribeInstanceSwitchNetwork()
 * @method DescribeShardTaskList DescribeShardTaskList()
 * @method PutRestorePreCheck PutRestorePreCheck()
 * @method ConfigureDrdsDbInstances ConfigureDrdsDbInstances()
 * @method CreateInstanceInternetAddress CreateInstanceInternetAddress()
 * @method ChangeInstanceAzone ChangeInstanceAzone()
 * @method SetBackupPolicy SetBackupPolicy()
 * @method DescribeSqlFlashbakTask DescribeSqlFlashbakTask()
 * @method ChangeAccountPassword ChangeAccountPassword()
 * @method ModifyAccountDescription ModifyAccountDescription()
 * @method DescribeExpandLogicTableInfoList DescribeExpandLogicTableInfoList()
 * @method EnableSqlAudit EnableSqlAudit()
 * @method FlashbackRecycleBinTable FlashbackRecycleBinTable()
 * @method DescribeInstDbLogInfo DescribeInstDbLogInfo()
 * @method ResetDrdsToRdsConnections ResetDrdsToRdsConnections()
 * @method CheckDrdsDbName CheckDrdsDbName()
 * @method DescribeDrdsDBIpWhiteList DescribeDrdsDBIpWhiteList()
 * @method DisableSqlAudit DisableSqlAudit()
 * @method CreateDrdsDBPreview CreateDrdsDBPreview()
 * @method DescribeBroadcastTables DescribeBroadcastTables()
 * @method CreateDrdsDB CreateDrdsDB()
 * @method RefreshDrdsAtomUrl RefreshDrdsAtomUrl()
 * @method DescribeDbInstanceDbs DescribeDbInstanceDbs()
 * @method DescribeRdsPrice DescribeRdsPrice()
 * @method TagResources TagResources()
 * @method DescribeBackupLocal DescribeBackupLocal()
 * @method SetupBroadcastTables SetupBroadcastTables()
 * @method DescribeGlobalBroadcastType DescribeGlobalBroadcastType()
 * @method DescribeRdsPerformanceSummary DescribeRdsPerformanceSummary()
 * @method RemoveInstanceAccount RemoveInstanceAccount()
 * @method DescribeRdsVpcForZone DescribeRdsVpcForZone()
 * @method GetCandidateInstanceList GetCandidateInstanceList()
 * @method EnableSqlFlashbackMatchSwitch EnableSqlFlashbackMatchSwitch()
 * @method RollbackInstanceVersion RollbackInstanceVersion()
 * @method DescribeDrdsRegions DescribeDrdsRegions()
 * @method RemoveDrdsDb RemoveDrdsDb()
 * @method RemoveDrdsDbFailedRecord RemoveDrdsDbFailedRecord()
 * @method DescribeDrdsInstanceLevelTasks DescribeDrdsInstanceLevelTasks()
 * @method CheckDrdsDefaultRole CheckDrdsDefaultRole()
 * @method SetupRecycleBinStatus SetupRecycleBinStatus()
 * @method RemoveBackupsSet RemoveBackupsSet()
 * @method ReleaseInstanceInternetAddress ReleaseInstanceInternetAddress()
 * @method MigrateJstDrdsDbAcrossRegion MigrateJstDrdsDbAcrossRegion()
 * @method DescribeInstanceSwitchAzone DescribeInstanceSwitchAzone()
 * @method DescribeRecycleBinTables DescribeRecycleBinTables()
 * @method DeleteShardTasks DeleteShardTasks()
 * @method DescribeRdsList DescribeRdsList()
 * @method CheckSlsStatus CheckSlsStatus()
 * @method DescribeDrdsParams DescribeDrdsParams()
 * @method PreCheckSqlFlashbackTask PreCheckSqlFlashbackTask()
 * @method SetupTable SetupTable()
 * @method CreateOrderForRds CreateOrderForRds()
 * @method DescribeHotDbList DescribeHotDbList()
 * @method SetupDrdsParams SetupDrdsParams()
 * @method ModifyAccountPrivilege ModifyAccountPrivilege()
 * @method DescribeRecycleBinStatus DescribeRecycleBinStatus()
 * @method SwitchGlobalBroadcastType SwitchGlobalBroadcastType()
 * @method RemoveRecycleBinTable RemoveRecycleBinTable()
 * @method CheckRdsSuperAccount CheckRdsSuperAccount()
 * @method ListTagResources ListTagResources()
 * @method SubmitSqlFlashbackTask SubmitSqlFlashbackTask()
 * @method DescribeShardTaskInfo DescribeShardTaskInfo()
 * @method DescribeBackMenu DescribeBackMenu()
 * @method RefreshJstMigrateDrdsDbAtomUrl RefreshJstMigrateDrdsDbAtomUrl()
 * @method DescribeDrdsTasks DescribeDrdsTasks()
 */
class V20190123
{
}

/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setIpWhiteList($ipWhiteList)
 * @method string getIpWhiteList()
 * @method $this setMode($mode)
 * @method bool getMode()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setGroupAttribute($groupAttribute)
 * @method string getGroupAttribute()
 */
class ModifyDrdsIpWhiteList extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstType($instType)
 * @method string getInstType()
 */
class DescribeStorageInstanceSubDbInfo extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeInstanceAccounts extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class RestartDrdsInstance extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 */
class DescribeRdsCommodity extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setExeTime($exeTime)
 * @method int getExeTime()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDrdsSlowSqls extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 */
class DescribeDrdsDbTasks extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setChooseSubDb($chooseSubDb)
 * @method string getChooseSubDb()
 * @method $this setChooseRds($chooseRds)
 * @method string getChooseRds()
 * @method $this setInstanceList($instanceList)
 * @method array getInstanceList()
 */
class RearrangeDbToInstance extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setDbInstanceId($dbInstanceId)
 * @method string getDbInstanceId()
 */
class DescribeDrdsDbInstance extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVswitchId($vswitchId)
 * @method string getVswitchId()
 * @method $this setSrcInstanceNetworkType($srcInstanceNetworkType)
 * @method string getSrcInstanceNetworkType()
 * @method $this setRetainClassic($retainClassic)
 * @method bool getRetainClassic()
 * @method $this setClassicExpiredDays($classicExpiredDays)
 * @method int getClassicExpiredDays()
 */
class ChangeInstanceNetwork extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class GetHotDbList extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeBackupSets extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsPassword($drdsPassword)
 * @method string getDrdsPassword()
 */
class EnableInstanceIpv6Address extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setAll($all)
 * @method bool getAll()
 * @method $this setNoRole($noRole)
 * @method bool getNoRole()
 * @method $this setTagKey($tagKey)
 * @method array getTagKey()
 */
class UntagResources extends Request
{

}/**
 * @method $this setType($type)
 * @method string getType()
 */
class DescribeConsoleConfig extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setInstanceList($instanceList)
 * @method array getInstanceList()
 */
class CheckRdsExpandStatus extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setPreferredRestoreTime($preferredRestoreTime)
 * @method string getPreferredRestoreTime()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 */
class DescribeBackupDbs extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyDrdsInstanceDescription extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setSearch($search)
 * @method string getSearch()
 * @method $this setDbInstType($dbInstType)
 * @method string getDbInstType()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDbInstances extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setPartitionMapping($partitionMapping)
 * @method array getPartitionMapping()
 */
class DescribeSrcRdsList extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setExpired($expired)
 * @method bool getExpired()
 */
class DescribeDrdsInstances extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDrdsDBs extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeBackupPolicy extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setDbNamePattern($dbNamePattern)
 * @method string getDbNamePattern()
 */
class DescribeDrdsShardingDbs extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeDrdsSqlAuditStatus extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class RemoveDrdsInstance extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setSourceTableName($sourceTableName)
 * @method string getSourceTableName()
 * @method $this setTargetTableName($targetTableName)
 * @method string getTargetTableName()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 */
class CreateShardTask extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDrdsDbInstances extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class DescribeTable extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPeriodMultiple($periodMultiple)
 * @method int getPeriodMultiple()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeDrdsInstanceMonitor extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsPassword($drdsPassword)
 * @method string getDrdsPassword()
 */
class UpgradeInstanceVersion extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setPreferredBackupTime($preferredBackupTime)
 * @method string getPreferredBackupTime()
 * @method $this setBackupMode($backupMode)
 * @method string getBackupMode()
 * @method $this setBackupLevel($backupLevel)
 * @method string getBackupLevel()
 * @method $this setBackupDbNames($backupDbNames)
 * @method string getBackupDbNames()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 */
class DescribeRestoreOrder extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setParentJobId($parentJobId)
 * @method string getParentJobId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setExpandType($expandType)
 * @method string getExpandType()
 */
class SubmitSwitchTask extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setPartitionMapping($partitionMapping)
 * @method array getPartitionMapping()
 */
class GetSrcRdsList extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeDrdsDbRdsNameList extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeDrdsInstance extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setPreferredBackupTime($preferredBackupTime)
 * @method string getPreferredBackupTime()
 * @method $this setBackupMode($backupMode)
 * @method string getBackupMode()
 * @method $this setBackupLevel($backupLevel)
 * @method string getBackupLevel()
 * @method $this setBackupDbNames($backupDbNames)
 * @method string getBackupDbNames()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 */
class StartRestore extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTransferTaskInfos($transferTaskInfos)
 * @method array getTransferTaskInfos()
 * @method $this setRdsSuperInstances($rdsSuperInstances)
 * @method array getRdsSuperInstances()
 * @method $this setDbInstanceIsCreating($dbInstanceIsCreating)
 * @method bool getDbInstanceIsCreating()
 */
class SubmitSmoothExpandTask extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeInstanceMenuSwitch extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeDrdsInstanceVersion extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbInstType($dbInstType)
 * @method string getDbInstType()
 * @method $this setRdsInstance($rdsInstance)
 * @method array getRdsInstance()
 */
class DescribeRdsSuperAccountInstances extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setParentJobId($parentJobId)
 * @method string getParentJobId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setExpandType($expandType)
 * @method string getExpandType()
 */
class SubmitRollbackTask extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeDrdsInstanceDbMonitor extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeDrdsDB extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class CheckSqlAuditEnableStatus extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setSourceTableName($sourceTableName)
 * @method string getSourceTableName()
 * @method $this setTargetTableName($targetTableName)
 * @method string getTargetTableName()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 */
class ValidateShardTask extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setParentJobId($parentJobId)
 * @method string getParentJobId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setExpandType($expandType)
 * @method string getExpandType()
 */
class SubmitCleanTask extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setSearch($search)
 * @method string getSearch()
 * @method $this setAcrossZone($acrossZone)
 * @method bool getAcrossZone()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeCandidateInstanceList extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setLocalLogRetentionHours($localLogRetentionHours)
 * @method string getLocalLogRetentionHours()
 * @method $this setLocalLogRetentionSpace($localLogRetentionSpace)
 * @method string getLocalLogRetentionSpace()
 * @method $this setHighSpaceUsageProtection($highSpaceUsageProtection)
 * @method string getHighSpaceUsageProtection()
 */
class SetBackupLocal extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeInstDbSlsInfo extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class CheckExpandStatus extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setDbPrivilege($dbPrivilege)
 * @method array getDbPrivilege()
 */
class CreateInstanceAccount extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class GetExpandLogicTableInfoList extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setQuery($query)
 * @method string getQuery()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setTableType($tableType)
 * @method string getTableType()
 */
class DescribeTableListByType extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setInstanceNames($instanceNames)
 * @method string getInstanceNames()
 * @method $this setWeights($weights)
 * @method string getWeights()
 */
class ModifyRdsReadWeight extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class GetLogicTableInfoList extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setRdsDbMapping($rdsDbMapping)
 * @method array getRdsDbMapping()
 * @method $this setMapping($mapping)
 * @method array getMapping()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setTaskDesc($taskDesc)
 * @method string getTaskDesc()
 * @method $this setSupperAccountMapping($supperAccountMapping)
 * @method array getSupperAccountMapping()
 * @method $this setExtendedMapping($extendedMapping)
 * @method array getExtendedMapping()
 */
class SubmitHotExpandTask extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setCurrentPlan($currentPlan)
 * @method string getCurrentPlan()
 */
class DescribeCanExpandInstanceDetailList extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setBackupMode($backupMode)
 * @method string getBackupMode()
 * @method $this setBackupLevel($backupLevel)
 * @method string getBackupLevel()
 * @method $this setBackupDbNames($backupDbNames)
 * @method string getBackupDbNames()
 */
class PutStartBackup extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setQuery($query)
 * @method string getQuery()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeTables extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeBackupTimes extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeInstanceSwitchNetwork extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setQuery($query)
 * @method string getQuery()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 */
class DescribeShardTaskList extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setPreferredBackupTime($preferredBackupTime)
 * @method string getPreferredBackupTime()
 * @method $this setBackupMode($backupMode)
 * @method string getBackupMode()
 * @method $this setBackupLevel($backupLevel)
 * @method string getBackupLevel()
 * @method $this setBackupDbNames($backupDbNames)
 * @method string getBackupDbNames()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 */
class PutRestorePreCheck extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setDbInstance($dbInstance)
 * @method array getDbInstance()
 */
class ConfigureDrdsDbInstances extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsPassword($drdsPassword)
 * @method string getDrdsPassword()
 */
class CreateInstanceInternetAddress extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setOriginAzoneId($originAzoneId)
 * @method string getOriginAzoneId()
 * @method $this setTargetAzoneId($targetAzoneId)
 * @method string getTargetAzoneId()
 * @method $this setDrdsRegionId($drdsRegionId)
 * @method string getDrdsRegionId()
 */
class ChangeInstanceAzone extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setPreferredBackupPeriod($preferredBackupPeriod)
 * @method string getPreferredBackupPeriod()
 * @method $this setPreferredBackupStartTime($preferredBackupStartTime)
 * @method string getPreferredBackupStartTime()
 * @method $this setPreferredBackupEndTime($preferredBackupEndTime)
 * @method string getPreferredBackupEndTime()
 * @method $this setBackupMode($backupMode)
 * @method string getBackupMode()
 * @method $this setBackupLevel($backupLevel)
 * @method string getBackupLevel()
 * @method $this setBackupDbNames($backupDbNames)
 * @method string getBackupDbNames()
 * @method $this setBackupLog($backupLog)
 * @method string getBackupLog()
 * @method $this setDataBackupRetentionPeriod($dataBackupRetentionPeriod)
 * @method string getDataBackupRetentionPeriod()
 * @method $this setLogBackupRetentionPeriod($logBackupRetentionPeriod)
 * @method string getLogBackupRetentionPeriod()
 */
class SetBackupPolicy extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeSqlFlashbakTask extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class ChangeAccountPassword extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyAccountDescription extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeExpandLogicTableInfoList extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setIsRecall($isRecall)
 * @method bool getIsRecall()
 * @method $this setRecallStartTimestamp($recallStartTimestamp)
 * @method string getRecallStartTimestamp()
 * @method $this setRecallEndTimestamp($recallEndTimestamp)
 * @method string getRecallEndTimestamp()
 */
class EnableSqlAudit extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class FlashbackRecycleBinTable extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeInstDbLogInfo extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class ResetDrdsToRdsConnections extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class CheckDrdsDbName extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class DescribeDrdsDBIpWhiteList extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DisableSqlAudit extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setRdsInstance($rdsInstance)
 * @method array getRdsInstance()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDbInstType($dbInstType)
 * @method string getDbInstType()
 * @method $this setInstDbName($instDbName)
 * @method array getInstDbName()
 * @method $this setDbInstanceIsCreating($dbInstanceIsCreating)
 * @method bool getDbInstanceIsCreating()
 */
class CreateDrdsDBPreview extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setQuery($query)
 * @method string getQuery()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeBroadcastTables extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setEncode($encode)
 * @method string getEncode()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setRdsInstance($rdsInstance)
 * @method array getRdsInstance()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDbInstType($dbInstType)
 * @method string getDbInstType()
 * @method $this setRdsSuperAccount($rdsSuperAccount)
 * @method array getRdsSuperAccount()
 * @method $this setInstDbName($instDbName)
 * @method array getInstDbName()
 * @method $this setDbInstanceIsCreating($dbInstanceIsCreating)
 * @method bool getDbInstanceIsCreating()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 */
class CreateDrdsDB extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class RefreshDrdsAtomUrl extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbInstanceId($dbInstanceId)
 * @method string getDbInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class DescribeDbInstanceDbs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setParams($params)
 * @method string getParams()
 */
class DescribeRdsPrice extends Request
{

}/**
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setNoRole($noRole)
 * @method bool getNoRole()
 */
class TagResources extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeBackupLocal extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setActive($active)
 * @method bool getActive()
 * @method $this setTableName($tableName)
 * @method array getTableName()
 */
class SetupBroadcastTables extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeGlobalBroadcastType extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setRdsInstanceId($rdsInstanceId)
 * @method array getRdsInstanceId()
 */
class DescribeRdsPerformanceSummary extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 */
class RemoveInstanceAccount extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 */
class DescribeRdsVpcForZone extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setSearch($search)
 * @method string getSearch()
 * @method $this setAcrossZone($acrossZone)
 * @method bool getAcrossZone()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class GetCandidateInstanceList extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class EnableSqlFlashbackMatchSwitch extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsPassword($drdsPassword)
 * @method string getDrdsPassword()
 */
class RollbackInstanceVersion extends Request
{

}/**
 */
class DescribeDrdsRegions extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class RemoveDrdsDb extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class RemoveDrdsDbFailedRecord extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeDrdsInstanceLevelTasks extends Request
{

}/**
 */
class CheckDrdsDefaultRole extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setStatusAction($statusAction)
 * @method string getStatusAction()
 */
class SetupRecycleBinStatus extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 */
class RemoveBackupsSet extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsPassword($drdsPassword)
 * @method string getDrdsPassword()
 */
class ReleaseInstanceInternetAddress extends Request
{

}/**
 * @method $this setSrcDrdsInstanceId($srcDrdsInstanceId)
 * @method string getSrcDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setDstDrdsInstanceId($dstDrdsInstanceId)
 * @method string getDstDrdsInstanceId()
 */
class MigrateJstDrdsDbAcrossRegion extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeInstanceSwitchAzone extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeRecycleBinTables extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method array getTableName()
 */
class DeleteShardTasks extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeRdsList extends Request
{

}/**
 */
class CheckSlsStatus extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setParamLevel($paramLevel)
 * @method string getParamLevel()
 */
class DescribeDrdsParams extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class PreCheckSqlFlashbackTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setAllowFullTableScan($allowFullTableScan)
 * @method bool getAllowFullTableScan()
 * @method $this setTableName($tableName)
 * @method array getTableName()
 */
class SetupTable extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setParams($params)
 * @method string getParams()
 */
class CreateOrderForRds extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeHotDbList extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setParamLevel($paramLevel)
 * @method string getParamLevel()
 * @method $this setData($data)
 * @method array getData()
 */
class SetupDrdsParams extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setDbPrivilege($dbPrivilege)
 * @method array getDbPrivilege()
 */
class ModifyAccountPrivilege extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeRecycleBinStatus extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class SwitchGlobalBroadcastType extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class RemoveRecycleBinTable extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbInstanceId($dbInstanceId)
 * @method string getDbInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class CheckRdsSuperAccount extends Request
{

}/**
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setNoRole($noRole)
 * @method bool getNoRole()
 * @method $this setNextToken($nextToken)
 * @method string getNextToken()
 */
class ListTagResources extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 * @method $this setSqlType($sqlType)
 * @method string getSqlType()
 * @method $this setSqlPk($sqlPk)
 * @method string getSqlPk()
 * @method $this setRecallType($recallType)
 * @method int getRecallType()
 * @method $this setRecallRestoreType($recallRestoreType)
 * @method int getRecallRestoreType()
 */
class SubmitSqlFlashbackTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setSourceTableName($sourceTableName)
 * @method string getSourceTableName()
 * @method $this setTargetTableName($targetTableName)
 * @method string getTargetTableName()
 */
class DescribeShardTaskInfo extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeBackMenu extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class RefreshJstMigrateDrdsDbAtomUrl extends Request
{

}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 */
class DescribeDrdsTasks extends Request
{

}