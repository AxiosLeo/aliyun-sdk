<?php

namespace aliyun\sdk\services\Rds20140815;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20140815
 *
 * @package aliyun\sdk\services\Rds20140815
 * @method DescribeSQLCollectorVersion DescribeSQLCollectorVersion()
 * @method CreateAccountForInner CreateAccountForInner()
 * @method ModifyFCTrigger ModifyFCTrigger()
 * @method DescribeBackupSetsForSecurity DescribeBackupSetsForSecurity()
 * @method RestartDBInstance RestartDBInstance()
 * @method DescribeDynamicVerificationList DescribeDynamicVerificationList()
 * @method CreateOrderForDefer CreateOrderForDefer()
 * @method DescribeDBInstanceSSL DescribeDBInstanceSSL()
 * @method ReleaseReplica ReleaseReplica()
 * @method ModifyReplicaMode ModifyReplicaMode()
 * @method CreateOpenSearchDBInstance CreateOpenSearchDBInstance()
 * @method DescribeUserInfo DescribeUserInfo()
 * @method ModifyParameter ModifyParameter()
 * @method MigrateSecurityIPMode MigrateSecurityIPMode()
 * @method DescribeSlowLogs DescribeSlowLogs()
 * @method ModifyDBInstanceConnectionString ModifyDBInstanceConnectionString()
 * @method DescribeDBInstanceHAConfig DescribeDBInstanceHAConfig()
 * @method SwitchGuardToMasterInstance SwitchGuardToMasterInstance()
 * @method ModifyMySQLDBInstanceDelay ModifyMySQLDBInstanceDelay()
 * @method DescribeDampPolicyByPolicyName DescribeDampPolicyByPolicyName()
 * @method DescribeRealtimeDiagnoses DescribeRealtimeDiagnoses()
 * @method SwitchDBInstanceHA SwitchDBInstanceHA()
 * @method DescribeOssDownloadsForSQLServer DescribeOssDownloadsForSQLServer()
 * @method CreateReadOnlyDBInstance CreateReadOnlyDBInstance()
 * @method DescribeOptimizeAdviceOnMissIndex DescribeOptimizeAdviceOnMissIndex()
 * @method CheckRecoveryConditions CheckRecoveryConditions()
 * @method DescribeResourceUsage DescribeResourceUsage()
 * @method CreateOrderForDegrade CreateOrderForDegrade()
 * @method CheckSqlLogHistoryEnable CheckSqlLogHistoryEnable()
 * @method GrantAccountPrivilege GrantAccountPrivilege()
 * @method DescribeActiveOperationTaskType DescribeActiveOperationTaskType()
 * @method CheckDBInstances CheckDBInstances()
 * @method DescribeDBInstances DescribeDBInstances()
 * @method AddTagsToResource AddTagsToResource()
 * @method CreatePostpaidDBInstanceForChannel CreatePostpaidDBInstanceForChannel()
 * @method CreateDBInstanceforFirstPay CreateDBInstanceforFirstPay()
 * @method DescribeDampPolicyByComment DescribeDampPolicyByComment()
 * @method DescribeAccounts DescribeAccounts()
 * @method DescribeReplicaInitializeProgress DescribeReplicaInitializeProgress()
 * @method ModifyDBInstanceDescription ModifyDBInstanceDescription()
 * @method CheckAccountNameAvailable CheckAccountNameAvailable()
 * @method DescribeTemplatesSqlType DescribeTemplatesSqlType()
 * @method CreateDampPolicy CreateDampPolicy()
 * @method DescribeTemplateSqlDetail DescribeTemplateSqlDetail()
 * @method CreateDBInstanceForChannel CreateDBInstanceForChannel()
 * @method ModifyReplicaVerificationMode ModifyReplicaVerificationMode()
 * @method CheckResource CheckResource()
 * @method DeleteFCTrigger DeleteFCTrigger()
 * @method CreateDatabase CreateDatabase()
 * @method ImportDataForSQLServer ImportDataForSQLServer()
 * @method RemoveTagsFromResource RemoveTagsFromResource()
 * @method DescribeActiveOperationTask DescribeActiveOperationTask()
 * @method ModifyReplicaDescription ModifyReplicaDescription()
 * @method DescribeSyncAccountForInner DescribeSyncAccountForInner()
 * @method DescribeCloudDbExpertService DescribeCloudDbExpertService()
 * @method DescribeDBInstanceMonitor DescribeDBInstanceMonitor()
 * @method StartSqlLogDump StartSqlLogDump()
 * @method DescribeMigrateTasksForSQLServer DescribeMigrateTasksForSQLServer()
 * @method DescribeAvailableResource DescribeAvailableResource()
 * @method DescribeTemplatesConsumeAndScanRows DescribeTemplatesConsumeAndScanRows()
 * @method ModifySecurityGroupConfiguration ModifySecurityGroupConfiguration()
 * @method QueryPriceForTempUpgrade QueryPriceForTempUpgrade()
 * @method CreatePolicyWithSpecifiedPolicy CreatePolicyWithSpecifiedPolicy()
 * @method DescribeDBInstanceExtendAttribute DescribeDBInstanceExtendAttribute()
 * @method DescribeBackupPolicy DescribeBackupPolicy()
 * @method CheckInstanceExist CheckInstanceExist()
 * @method BatchGrantAccountPrivilege BatchGrantAccountPrivilege()
 * @method SwitchDBInstanceVpc SwitchDBInstanceVpc()
 * @method DegradeDBInstanceSpec DegradeDBInstanceSpec()
 * @method ModifyInstanceAutoRenewAttribute ModifyInstanceAutoRenewAttribute()
 * @method DescribeUserEncryptionKeyList DescribeUserEncryptionKeyList()
 * @method DecribeSqlLogDumpStatus DecribeSqlLogDumpStatus()
 * @method UpgradeDBInstanceEngineVersion UpgradeDBInstanceEngineVersion()
 * @method DeleteDatabase DeleteDatabase()
 * @method AddBuDBInstanceRelation AddBuDBInstanceRelation()
 * @method DescribeArchiveSQLLogFromKepler DescribeArchiveSQLLogFromKepler()
 * @method DescribeMetaList DescribeMetaList()
 * @method StopSyncing StopSyncing()
 * @method DescribeDBInstanceNetInfoForChannel DescribeDBInstanceNetInfoForChannel()
 * @method DescribeOptimizeAdviceByDBA DescribeOptimizeAdviceByDBA()
 * @method DescribeDBInstancesByExpireTime DescribeDBInstancesByExpireTime()
 * @method UpgradeDBInstanceNetwork UpgradeDBInstanceNetwork()
 * @method ReleaseInstancePublicConnection ReleaseInstancePublicConnection()
 * @method DescribeInstanceLevelList DescribeInstanceLevelList()
 * @method DescribeProxyFunctionSupport DescribeProxyFunctionSupport()
 * @method DescribeBinlogFiles DescribeBinlogFiles()
 * @method CreateOrder CreateOrder()
 * @method ModifyDBInstanceMonitor ModifyDBInstanceMonitor()
 * @method DescribePreCheckResults DescribePreCheckResults()
 * @method ModifyDBInstanceNetExpireTime ModifyDBInstanceNetExpireTime()
 * @method ResetAccountPassword ResetAccountPassword()
 * @method DescribeDBInstancesAsCsv DescribeDBInstancesAsCsv()
 * @method QueryPriceForRefund QueryPriceForRefund()
 * @method CreateBackup CreateBackup()
 * @method UpgradeDBInstanceNetWorkInfo UpgradeDBInstanceNetWorkInfo()
 * @method ModifyDBInstanceDelayedReplicationTime ModifyDBInstanceDelayedReplicationTime()
 * @method UpgradeDBInstanceKernelVersion UpgradeDBInstanceKernelVersion()
 * @method CreateMigrateTaskForSQLServer CreateMigrateTaskForSQLServer()
 * @method ModifyCommodity ModifyCommodity()
 * @method DescribeFilesForSQLServer DescribeFilesForSQLServer()
 * @method ModifyDBInstanceNetworkType ModifyDBInstanceNetworkType()
 * @method DescribeDBInstanceNetworkDetail DescribeDBInstanceNetworkDetail()
 * @method ModifySecurityIpsForChannel ModifySecurityIpsForChannel()
 * @method ModifyReplicaRecoverMode ModifyReplicaRecoverMode()
 * @method DescribeDatabaseLockDiagnosis DescribeDatabaseLockDiagnosis()
 * @method DescribeReplicaUsage DescribeReplicaUsage()
 * @method DescribeActiveOperationTaskRegion DescribeActiveOperationTaskRegion()
 * @method DescribeSQLCollectorPolicy DescribeSQLCollectorPolicy()
 * @method DescribePrice DescribePrice()
 * @method PurgeDBInstanceLog PurgeDBInstanceLog()
 * @method DescribeDBInstanceSwitchLog DescribeDBInstanceSwitchLog()
 * @method LockDBInstance LockDBInstance()
 * @method DescribeSQLCollectorRetention DescribeSQLCollectorRetention()
 * @method EvaluateFailOverSwitch EvaluateFailOverSwitch()
 * @method DescribeMigrateCountInfo DescribeMigrateCountInfo()
 * @method DescribeSQLServerUpgradeVersions DescribeSQLServerUpgradeVersions()
 * @method DeleteParameterGroup DeleteParameterGroup()
 * @method DescribeSqlLogDumpStatus DescribeSqlLogDumpStatus()
 * @method CreateUploadPathForSQLServer CreateUploadPathForSQLServer()
 * @method AllocateReadWriteSplittingConnection AllocateReadWriteSplittingConnection()
 * @method DescribeBackupTasks DescribeBackupTasks()
 * @method DescribeErrorLogs DescribeErrorLogs()
 * @method DescribeRegionsForChannel DescribeRegionsForChannel()
 * @method AllocateClassicNetworkType AllocateClassicNetworkType()
 * @method ModifyDBInstanceDelayReplicationTime ModifyDBInstanceDelayReplicationTime()
 * @method QueryPriceForBuy QueryPriceForBuy()
 * @method DeleteDampPolicy DeleteDampPolicy()
 * @method DescribeDBInstanceEncryptionKey DescribeDBInstanceEncryptionKey()
 * @method ModifyActiveOperationTask ModifyActiveOperationTask()
 * @method RequestServiceOfCloudDBExpert RequestServiceOfCloudDBExpert()
 * @method DescribeBackups DescribeBackups()
 * @method PreCheckBeforeImportData PreCheckBeforeImportData()
 * @method DeleteAccount DeleteAccount()
 * @method DescribeVerificationList DescribeVerificationList()
 * @method ReleaseReadWriteSplittingConnection ReleaseReadWriteSplittingConnection()
 * @method DescribeRegionAvailability DescribeRegionAvailability()
 * @method CreateAccount CreateAccount()
 * @method DescribeSQLLogRecordsList DescribeSQLLogRecordsList()
 * @method DescribeInstanceVpcMigrateInfo DescribeInstanceVpcMigrateInfo()
 * @method ModifyCollationTimeZone ModifyCollationTimeZone()
 * @method DescribeBackupsForSecurity DescribeBackupsForSecurity()
 * @method RestoreDBInstance RestoreDBInstance()
 * @method DescribeRdsVpcs DescribeRdsVpcs()
 * @method DescribeStaticVerificationList DescribeStaticVerificationList()
 * @method ModifyInstanceAutoRenewalAttribute ModifyInstanceAutoRenewalAttribute()
 * @method DescribeSecurityGroupConfiguration DescribeSecurityGroupConfiguration()
 * @method UnlockDBInstance UnlockDBInstance()
 * @method ModifyDBInstanceOwner ModifyDBInstanceOwner()
 * @method DescribeDBInstanceProxyConfiguration DescribeDBInstanceProxyConfiguration()
 * @method ModifyResourceGroup ModifyResourceGroup()
 * @method CheckCloudResourceAuthorized CheckCloudResourceAuthorized()
 * @method ModifyDBInstanceNetworkExpireTime ModifyDBInstanceNetworkExpireTime()
 * @method ModifySecurityIps ModifySecurityIps()
 * @method DescribeSQLLogRecords DescribeSQLLogRecords()
 * @method GrantOperatorPermission GrantOperatorPermission()
 * @method DescribeInstanceAutoRenewAttribute DescribeInstanceAutoRenewAttribute()
 * @method DescibeImportsFromDatabase DescibeImportsFromDatabase()
 * @method StartSqlLogTrail StartSqlLogTrail()
 * @method MigrateToOtherZone MigrateToOtherZone()
 * @method CopyDatabaseBetweenInstances CopyDatabaseBetweenInstances()
 * @method MigrateToOtherRegion MigrateToOtherRegion()
 * @method CreateOrderForModify CreateOrderForModify()
 * @method DescribeDBInstanceNetwork DescribeDBInstanceNetwork()
 * @method DescribeRdsVSwitchs DescribeRdsVSwitchs()
 * @method DescribeSQLLogReports DescribeSQLLogReports()
 * @method CreateTempDBInstanceForChannel CreateTempDBInstanceForChannel()
 * @method DescribeLogicDBInstanceTopology DescribeLogicDBInstanceTopology()
 * @method DescribeOperatorPermission DescribeOperatorPermission()
 * @method DescribeDBInstanceNetInfo DescribeDBInstanceNetInfo()
 * @method ModifyDBInstancePayType ModifyDBInstancePayType()
 * @method ResetAccount ResetAccount()
 * @method DescribeDBInstanceAttribute DescribeDBInstanceAttribute()
 * @method DescribeDBInstanceTDE DescribeDBInstanceTDE()
 * @method ModifyOpenSearchDBInstance ModifyOpenSearchDBInstance()
 * @method ExtractBackupFromOAS ExtractBackupFromOAS()
 * @method DescribeLogBackupFiles DescribeLogBackupFiles()
 * @method DescribeOptimizeAdviceOnBigTable DescribeOptimizeAdviceOnBigTable()
 * @method ResetAccountForPG ResetAccountForPG()
 * @method ModifyReplicaRecoveryMode ModifyReplicaRecoveryMode()
 * @method DescribeDBInstancesByPerformance DescribeDBInstancesByPerformance()
 * @method CreateDatabaseForInner CreateDatabaseForInner()
 * @method CreateStaticVerification CreateStaticVerification()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeSQLReports DescribeSQLReports()
 * @method DescribeTasks DescribeTasks()
 * @method DescribeInstanceAutoRenewalAttribute DescribeInstanceAutoRenewalAttribute()
 * @method CalculateDBInstanceWeight CalculateDBInstanceWeight()
 * @method DescribeSlowLogRecords DescribeSlowLogRecords()
 * @method DescribeActiveOperationTaskCount DescribeActiveOperationTaskCount()
 * @method CreateOrderForClone CreateOrderForClone()
 * @method ResetAdminAccountPassword ResetAdminAccountPassword()
 * @method DescribeOptimizeAdviceOnExcessIndex DescribeOptimizeAdviceOnExcessIndex()
 * @method SwitchOver SwitchOver()
 * @method DescribeCustinsKernelReleaseNotes DescribeCustinsKernelReleaseNotes()
 * @method ModifyDynamicMode ModifyDynamicMode()
 * @method DescribeDBInstanceECSSGRelation DescribeDBInstanceECSSGRelation()
 * @method DeleteDBInstance DeleteDBInstance()
 * @method ModifyAccountDescription ModifyAccountDescription()
 * @method BatchRevokeAccountPrivilege BatchRevokeAccountPrivilege()
 * @method CreateDiagnosticReport CreateDiagnosticReport()
 * @method ModifyDBInstanceProxyConfiguration ModifyDBInstanceProxyConfiguration()
 * @method ModifyParameterGroup ModifyParameterGroup()
 * @method DescribeAbnormalDBInstances DescribeAbnormalDBInstances()
 * @method DescribeSqlLogDetailArchiveStatus DescribeSqlLogDetailArchiveStatus()
 * @method ModifyDBInstanceChargeTypeForJuShiTa ModifyDBInstanceChargeTypeForJuShiTa()
 * @method ModifyDBDescription ModifyDBDescription()
 * @method QueryOssBuckets QueryOssBuckets()
 * @method QueryPrice QueryPrice()
 * @method DescribeInstanceKeywords DescribeInstanceKeywords()
 * @method CheckInstanceExsit CheckInstanceExsit()
 * @method ModifyDampPolicy ModifyDampPolicy()
 * @method CreateDBInstanceReplica CreateDBInstanceReplica()
 * @method DescribeDampPoliciesByCid DescribeDampPoliciesByCid()
 * @method DescribeParameters DescribeParameters()
 * @method DescribeFCTrigger DescribeFCTrigger()
 * @method ModifyReplicaRelation ModifyReplicaRelation()
 * @method ModifyDBInstanceTDE ModifyDBInstanceTDE()
 * @method RevokeAccountPrivilege RevokeAccountPrivilege()
 * @method CompensateInstanceForChannel CompensateInstanceForChannel()
 * @method ModifyDBInstanceHAConfig ModifyDBInstanceHAConfig()
 * @method CancelImport CancelImport()
 * @method DeleteBackup DeleteBackup()
 * @method CreateMulOrderForDefer CreateMulOrderForDefer()
 * @method RestoreTable RestoreTable()
 * @method CopyDatabase CopyDatabase()
 * @method DescribeSQLDiagnosis DescribeSQLDiagnosis()
 * @method QueryPriceMulti QueryPriceMulti()
 * @method DescribeDBInstancePerformance DescribeDBInstancePerformance()
 * @method CreateOrderForRebuild CreateOrderForRebuild()
 * @method DescribeReplicaConflictInfo DescribeReplicaConflictInfo()
 * @method DescribeParameterGroup DescribeParameterGroup()
 * @method ModifyDBInstanceConnectionMode ModifyDBInstanceConnectionMode()
 * @method StartDBInstanceDiagnose StartDBInstanceDiagnose()
 * @method DescribeRenewalPrice DescribeRenewalPrice()
 * @method DescribeSqlTemplatesConsumeAndScanRows DescribeSqlTemplatesConsumeAndScanRows()
 * @method CreateTempDBInstance CreateTempDBInstance()
 * @method ModifyReplicaDynamicMode ModifyReplicaDynamicMode()
 * @method SwitchDBInstanceNetType SwitchDBInstanceNetType()
 * @method ReceiveDBInstance ReceiveDBInstance()
 * @method DescribeReadDBInstanceDelay DescribeReadDBInstanceDelay()
 * @method ModifySQLCollectorRetention ModifySQLCollectorRetention()
 * @method RequestServiceOfCloudDBA RequestServiceOfCloudDBA()
 * @method DescribeDBInstanceInfo DescribeDBInstanceInfo()
 * @method ModifyDBInstanceMaintainTime ModifyDBInstanceMaintainTime()
 * @method DescribeDBInstanceByTags DescribeDBInstanceByTags()
 * @method AllocateInstancePrivateConnection AllocateInstancePrivateConnection()
 * @method DescribeTemplatesList DescribeTemplatesList()
 * @method CreateSQLDiagnosis CreateSQLDiagnosis()
 * @method CreateMigrateTask CreateMigrateTask()
 * @method DescribeTags DescribeTags()
 * @method DescribeDiagnosticReportList DescribeDiagnosticReportList()
 * @method CreateFCTrigger CreateFCTrigger()
 * @method AllocateInstanceVpcNetworkType AllocateInstanceVpcNetworkType()
 * @method DescribeTaskInfo DescribeTaskInfo()
 * @method DescribeCollationTimeZones DescribeCollationTimeZones()
 * @method DescribeCharacterSetName DescribeCharacterSetName()
 * @method DescribeResourceDiagnosis DescribeResourceDiagnosis()
 * @method CreatePostpaidDBInstance CreatePostpaidDBInstance()
 * @method ImportDataFromDatabase ImportDataFromDatabase()
 * @method RevokeOperatorPermission RevokeOperatorPermission()
 * @method DescribeDatabases DescribeDatabases()
 * @method DescribeServiceOfCloudDBA DescribeServiceOfCloudDBA()
 * @method ModifyReplicaFilterMode ModifyReplicaFilterMode()
 * @method SwitchDBInstanceChargeType SwitchDBInstanceChargeType()
 * @method DescribeOpenSearchDBInstance DescribeOpenSearchDBInstance()
 * @method DescribeOptimizeAdviceOnMissPK DescribeOptimizeAdviceOnMissPK()
 * @method EvaluateFailover EvaluateFailover()
 * @method DescribeSyncAccounts DescribeSyncAccounts()
 * @method DescribeStrategy DescribeStrategy()
 * @method Failover Failover()
 * @method CreateOnlineDatabaseTask CreateOnlineDatabaseTask()
 * @method DescribeSQLInjectionInfos DescribeSQLInjectionInfos()
 * @method ModifyDBInstanceSpec ModifyDBInstanceSpec()
 * @method DescribeAvailableInstanceClass DescribeAvailableInstanceClass()
 * @method DescribeModifyParameterLog DescribeModifyParameterLog()
 * @method ModifyReadWriteSplittingConnection ModifyReadWriteSplittingConnection()
 * @method AllocateCloudInstanceIp AllocateCloudInstanceIp()
 * @method DescribeCommodity DescribeCommodity()
 * @method DescribeSqlLogTimeDistribution DescribeSqlLogTimeDistribution()
 * @method AllocateInstancePublicConnection AllocateInstancePublicConnection()
 * @method DescribeDBInstancesWithCloudResource DescribeDBInstancesWithCloudResource()
 * @method CloneParameterGroup CloneParameterGroup()
 * @method DescribeImportsForSQLServer DescribeImportsForSQLServer()
 * @method DescribeDBInstanceIPArrayList DescribeDBInstanceIPArrayList()
 * @method ModifyBackupPolicy ModifyBackupPolicy()
 * @method CheckDBNameAvailable CheckDBNameAvailable()
 * @method DescribeDBInstanceUser DescribeDBInstanceUser()
 * @method DescribeSqlLogTemplatesTimeDistribution DescribeSqlLogTemplatesTimeDistribution()
 * @method DescribeBackupDatabase DescribeBackupDatabase()
 * @method CreateAdminAccount CreateAdminAccount()
 * @method ModifyGuardDomainMode ModifyGuardDomainMode()
 * @method DescribeParameterTemplates DescribeParameterTemplates()
 * @method ImportDatabaseBetweenInstances ImportDatabaseBetweenInstances()
 * @method RenewDBInstance RenewDBInstance()
 * @method EvaluateResource EvaluateResource()
 * @method DeleteOpenSearchDBInstance DeleteOpenSearchDBInstance()
 * @method DescribeParameterGroups DescribeParameterGroups()
 * @method CloneDBInstance CloneDBInstance()
 * @method LoginDBInstancefromCloudDBA LoginDBInstancefromCloudDBA()
 * @method DescribeReplicaPerformance DescribeReplicaPerformance()
 * @method DestroyDBInstance DestroyDBInstance()
 * @method DescribeMigrateTasks DescribeMigrateTasks()
 * @method RenewInstance RenewInstance()
 * @method CloneDBInstanceForSecurity CloneDBInstanceForSecurity()
 * @method DescribeCloudDBAService DescribeCloudDBAService()
 * @method ModifyDBInstanceSSL ModifyDBInstanceSSL()
 * @method DescribeVpcZoneNos DescribeVpcZoneNos()
 * @method ModifyReadonlyInstanceDelayReplicationTime ModifyReadonlyInstanceDelayReplicationTime()
 * @method DescribeOperationLogs DescribeOperationLogs()
 * @method ModifyDBInstanceECSSGRelation ModifyDBInstanceECSSGRelation()
 * @method DescribeReplicas DescribeReplicas()
 * @method CreateDBInstance CreateDBInstance()
 * @method CreateOrderForTempUpgrade CreateOrderForTempUpgrade()
 * @method DeleteCloudInstanceIp DeleteCloudInstanceIp()
 * @method CreateMulOrderForBuy CreateMulOrderForBuy()
 * @method DescribeOptimizeAdviceOnStorage DescribeOptimizeAdviceOnStorage()
 * @method DescribeSqlLogTemplatesList DescribeSqlLogTemplatesList()
 * @method StartSqlLogDetailArchive StartSqlLogDetailArchive()
 * @method CreateParameterGroup CreateParameterGroup()
 * @method StartArchiveSQLLog StartArchiveSQLLog()
 * @method RecoveryDBInstance RecoveryDBInstance()
 * @method QueryPriceMultiForDefer QueryPriceMultiForDefer()
 * @method DescribeSQLLogReportList DescribeSQLLogReportList()
 * @method DescribeSQLLogFiles DescribeSQLLogFiles()
 * @method ModifyPostpaidDBInstanceSpec ModifyPostpaidDBInstanceSpec()
 * @method ModifySQLCollectorPolicy ModifySQLCollectorPolicy()
 * @method DescribeSQLDiagnosisList DescribeSQLDiagnosisList()
 * @method DescribeOssDownloads DescribeOssDownloads()
 */
class V20140815
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeSQLCollectorVersion extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setAccountPrivilege($accountPrivilege)
 * @method string getAccountPrivilege()
 * @method $this setAccountDescription($accountDescription)
 * @method string getAccountDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAccountType($accountType)
 * @method string getAccountType()
 */
class CreateAccountForInner extends Request
{

}/**
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTriggerId($triggerId)
 * @method string getTriggerId()
 * @method $this setTriggerArn($triggerArn)
 * @method string getTriggerArn()
 * @method $this setFunctionArn($functionArn)
 * @method string getFunctionArn()
 * @method $this setInvocationRoleArn($invocationRoleArn)
 * @method string getInvocationRoleArn()
 * @method $this setSubscriptionObjects($subscriptionObjects)
 * @method array getSubscriptionObjects()
 * @method $this setEventFormat($eventFormat)
 * @method string getEventFormat()
 * @method $this setConcurrency($concurrency)
 * @method int getConcurrency()
 * @method $this setRetry($retry)
 * @method int getRetry()
 */
class ModifyFCTrigger extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTargetAliUid($targetAliUid)
 * @method string getTargetAliUid()
 * @method $this setTargetAliBid($targetAliBid)
 * @method string getTargetAliBid()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setBackupLocation($backupLocation)
 * @method string getBackupLocation()
 * @method $this setBackupStatus($backupStatus)
 * @method string getBackupStatus()
 * @method $this setBackupMode($backupMode)
 * @method string getBackupMode()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeBackupSetsForSecurity extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class RestartDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDynamicVerificationList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($timeType)
 * @method string getTimeType()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setRenewChange($renewChange)
 * @method bool getRenewChange()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 */
class CreateOrderForDefer extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDBInstanceSSL extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 */
class ReleaseReplica extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setReplicaMode($replicaMode)
 * @method string getReplicaMode()
 * @method $this setPrimaryInstanceId($primaryInstanceId)
 * @method string getPrimaryInstanceId()
 * @method $this setDomainMode($domainMode)
 * @method string getDomainMode()
 */
class ModifyReplicaMode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setLcuQuota($lcuQuota)
 * @method string getLcuQuota()
 * @method $this setStorageQuota($storageQuota)
 * @method string getStorageQuota()
 * @method $this setSpecQuota($specQuota)
 * @method string getSpecQuota()
 * @method $this setSearchType($searchType)
 * @method string getSearchType()
 */
class CreateOpenSearchDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class DescribeUserInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setParameters($parameters)
 * @method string getParameters()
 * @method $this setForcerestart($forcerestart)
 * @method bool getForcerestart()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyParameter extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class MigrateSecurityIPMode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setSortKey($sortKey)
 * @method string getSortKey()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeSlowLogs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setCurrentConnectionString($currentConnectionString)
 * @method string getCurrentConnectionString()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBInstanceConnectionString extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDBInstanceHAConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SwitchGuardToMasterInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSqlDelay($sqlDelay)
 * @method string getSqlDelay()
 */
class ModifyMySQLDBInstanceDelay extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 */
class DescribeDampPolicyByPolicyName extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeRealtimeDiagnoses extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setForce($force)
 * @method string getForce()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setEffectiveTime($effectiveTime)
 * @method string getEffectiveTime()
 */
class SwitchDBInstanceHA extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setMigrateTaskId($migrateTaskId)
 * @method string getMigrateTaskId()
 */
class DescribeOssDownloadsForSQLServer extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setDBInstanceStorageType($dBInstanceStorageType)
 * @method string getDBInstanceStorageType()
 */
class CreateReadOnlyDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeOptimizeAdviceOnMissIndex extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setBackupFile($backupFile)
 * @method string getBackupFile()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CheckRecoveryConditions extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeResourceUsage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($timeType)
 * @method string getTimeType()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setEffectiveTime($effectiveTime)
 * @method string getEffectiveTime()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setPromotionCode($promotionCode)
 * @method string getPromotionCode()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 */
class CreateOrderForDegrade extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class CheckSqlLogHistoryEnable extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setAccountPrivilege($accountPrivilege)
 * @method string getAccountPrivilege()
 */
class GrantAccountPrivilege extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIsHistory($isHistory)
 * @method int getIsHistory()
 */
class DescribeActiveOperationTaskType extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class CheckDBInstances extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setDBInstanceStatus($dBInstanceStatus)
 * @method string getDBInstanceStatus()
 * @method $this setExpired($expired)
 * @method string getExpired()
 * @method $this setSearchKey($searchKey)
 * @method string getSearchKey()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceType($dBInstanceType)
 * @method string getDBInstanceType()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setConnectionMode($connectionMode)
 * @method string getConnectionMode()
 * @method $this setTag1key($tag1key)
 * @method string getTag1key()
 * @method $this setTag2key($tag2key)
 * @method string getTag2key()
 * @method $this setTag3key($tag3key)
 * @method string getTag3key()
 * @method $this setTag4key($tag4key)
 * @method string getTag4key()
 * @method $this setTag5key($tag5key)
 * @method string getTag5key()
 * @method $this setTag1value($tag1value)
 * @method string getTag1value()
 * @method $this setTag2value($tag2value)
 * @method string getTag2value()
 * @method $this setTag3value($tag3value)
 * @method string getTag3value()
 * @method $this setTag4value($tag4value)
 * @method string getTag4value()
 * @method $this setTag5value($tag5value)
 * @method string getTag5value()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDBInstances extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setTag1key($tag1key)
 * @method string getTag1key()
 * @method $this setTag2key($tag2key)
 * @method string getTag2key()
 * @method $this setTag3key($tag3key)
 * @method string getTag3key()
 * @method $this setTag4key($tag4key)
 * @method string getTag4key()
 * @method $this setTag5key($tag5key)
 * @method string getTag5key()
 * @method $this setTag1value($tag1value)
 * @method string getTag1value()
 * @method $this setTag2value($tag2value)
 * @method string getTag2value()
 * @method $this setTag3value($tag3value)
 * @method string getTag3value()
 * @method $this setTag4value($tag4value)
 * @method string getTag4value()
 * @method $this setTag5value($tag5value)
 * @method string getTag5value()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddTagsToResource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setDBInstanceNetType($dBInstanceNetType)
 * @method string getDBInstanceNetType()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreatePostpaidDBInstanceForChannel extends Request
{

}/**
 * @method $this setaction($action)
 * @method string getaction()
 * @method $this setuid($uid)
 * @method int getuid()
 * @method $this setbid($bid)
 * @method string getbid()
 * @method $this setuidLoginEmail($uidLoginEmail)
 * @method string getuidLoginEmail()
 * @method $this setbidLoginEmail($bidLoginEmail)
 * @method string getbidLoginEmail()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setDBInstanceNetType($dBInstanceNetType)
 * @method string getDBInstanceNetType()
 * @method $this setCharacterSetName($characterSetName)
 * @method string getCharacterSetName()
 * @method $this setDBInstanceRemarks($dBInstanceRemarks)
 * @method string getDBInstanceRemarks()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateDBInstanceforFirstPay extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 */
class DescribeDampPolicyByComment extends Request
{

}/**
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeAccounts extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 */
class DescribeReplicaInitializeProgress extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBInstanceDescription extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CheckAccountNameAvailable extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setMinConsume($minConsume)
 * @method string getMinConsume()
 * @method $this setMaxConsume($maxConsume)
 * @method string getMaxConsume()
 * @method $this setMinScanRows($minScanRows)
 * @method string getMinScanRows()
 * @method $this setMaxScanRows($maxScanRows)
 * @method string getMaxScanRows()
 * @method $this setPagingId($pagingId)
 * @method string getPagingId()
 * @method $this setSortKey($sortKey)
 * @method string getSortKey()
 * @method $this setSortMethod($sortMethod)
 * @method string getSortMethod()
 */
class DescribeTemplatesSqlType extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setHandlers($handlers)
 * @method string getHandlers()
 * @method $this setSourceRules($sourceRules)
 * @method string getSourceRules()
 * @method $this setTimeRules($timeRules)
 * @method string getTimeRules()
 * @method $this setActionRules($actionRules)
 * @method string getActionRules()
 */
class CreateDampPolicy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setMaxRecordsPerPage($maxRecordsPerPage)
 * @method int getMaxRecordsPerPage()
 * @method $this setPageNumbers($pageNumbers)
 * @method int getPageNumbers()
 * @method $this setPagingId($pagingId)
 * @method string getPagingId()
 * @method $this setTemplateHash($templateHash)
 * @method int getTemplateHash()
 * @method $this setSortKey($sortKey)
 * @method string getSortKey()
 * @method $this setSortMethod($sortMethod)
 * @method string getSortMethod()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DescribeTemplateSqlDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setSystemDBCharset($systemDBCharset)
 * @method string getSystemDBCharset()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setDBInstanceNetType($dBInstanceNetType)
 * @method string getDBInstanceNetType()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setDBInstanceStorageType($dBInstanceStorageType)
 * @method string getDBInstanceStorageType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class CreateDBInstanceForChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setVerificationMode($verificationMode)
 * @method string getVerificationMode()
 */
class ModifyReplicaVerificationMode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setDBInstanceUseType($dBInstanceUseType)
 * @method string getDBInstanceUseType()
 * @method $this setSpecifyCount($specifyCount)
 * @method string getSpecifyCount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CheckResource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTriggerId($triggerId)
 * @method string getTriggerId()
 */
class DeleteFCTrigger extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setCharacterSetName($characterSetName)
 * @method string getCharacterSetName()
 * @method $this setDBDescription($dBDescription)
 * @method string getDBDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateDatabase extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ImportDataForSQLServer extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setTag1key($tag1key)
 * @method string getTag1key()
 * @method $this setTag2key($tag2key)
 * @method string getTag2key()
 * @method $this setTag3key($tag3key)
 * @method string getTag3key()
 * @method $this setTag4key($tag4key)
 * @method string getTag4key()
 * @method $this setTag5key($tag5key)
 * @method string getTag5key()
 * @method $this setTag1value($tag1value)
 * @method string getTag1value()
 * @method $this setTag2value($tag2value)
 * @method string getTag2value()
 * @method $this setTag3value($tag3value)
 * @method string getTag3value()
 * @method $this setTag4value($tag4value)
 * @method string getTag4value()
 * @method $this setTag5value($tag5value)
 * @method string getTag5value()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class RemoveTagsFromResource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setIsHistory($isHistory)
 * @method int getIsHistory()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeActiveOperationTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setReplicaDescription($replicaDescription)
 * @method string getReplicaDescription()
 */
class ModifyReplicaDescription extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceName($dBInstanceName)
 * @method string getDBInstanceName()
 */
class DescribeSyncAccountForInner extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setServiceRequestType($serviceRequestType)
 * @method string getServiceRequestType()
 * @method $this setServiceRequestParam($serviceRequestParam)
 * @method string getServiceRequestParam()
 */
class DescribeCloudDbExpertService extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDBInstanceMonitor extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConfigValue($configValue)
 * @method string getConfigValue()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 */
class StartSqlLogDump extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeMigrateTasksForSQLServer extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeAvailableResource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeTemplatesConsumeAndScanRows extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 */
class ModifySecurityGroupConfiguration extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setCountryCode($countryCode)
 * @method string getCountryCode()
 * @method $this setCurrencyCode($currencyCode)
 * @method string getCurrencyCode()
 * @method $this setPromotionCode($promotionCode)
 * @method string getPromotionCode()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 */
class QueryPriceForTempUpgrade extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPolicyId($policyId)
 * @method string getPolicyId()
 */
class CreatePolicyWithSpecifiedPolicy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeDBInstanceExtendAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupPolicyMode($backupPolicyMode)
 * @method string getBackupPolicyMode()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCompressType($compressType)
 * @method string getCompressType()
 */
class DescribeBackupPolicy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class CheckInstanceExist extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setAccountPrivilege($accountPrivilege)
 * @method string getAccountPrivilege()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class BatchGrantAccountPrivilege extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 */
class SwitchDBInstanceVpc extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DegradeDBInstanceSpec extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDuration($duration)
 * @method string getDuration()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 */
class ModifyInstanceAutoRenewAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeUserEncryptionKeyList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DecribeSqlLogDumpStatus extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setEffectiveTime($effectiveTime)
 * @method string getEffectiveTime()
 */
class UpgradeDBInstanceEngineVersion extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 */
class DeleteDatabase extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBusinessUnit($businessUnit)
 * @method string getBusinessUnit()
 */
class AddBuDBInstanceRelation extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setArchiveJobID($archiveJobID)
 * @method string getArchiveJobID()
 * @method $this setOssTableName($ossTableName)
 * @method string getOssTableName()
 */
class DescribeArchiveSQLLogFromKepler extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRestoreType($restoreType)
 * @method string getRestoreType()
 * @method $this setBackupSetID($backupSetID)
 * @method string getBackupSetID()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setGetDbName($getDbName)
 * @method string getGetDbName()
 * @method $this setPattern($pattern)
 * @method string getPattern()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageIndex($pageIndex)
 * @method string getPageIndex()
 */
class DescribeMetaList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setImportId($importId)
 * @method int getImportId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class StopSyncing extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setFlag($flag)
 * @method string getFlag()
 * @method $this setDBInstanceNetRWSplitType($dBInstanceNetRWSplitType)
 * @method string getDBInstanceNetRWSplitType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDBInstanceNetInfoForChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeOptimizeAdviceByDBA extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setExpirePeriod($expirePeriod)
 * @method int getExpirePeriod()
 * @method $this setExpired($expired)
 * @method bool getExpired()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDBInstancesByExpireTime extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionString($connectionString)
 * @method string getConnectionString()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpgradeDBInstanceNetwork extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setCurrentConnectionString($currentConnectionString)
 * @method string getCurrentConnectionString()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReleaseInstancePublicConnection extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class DescribeInstanceLevelList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeProxyFunctionSupport extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeBinlogFiles extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setSystemDBCharset($systemDBCharset)
 * @method string getSystemDBCharset()
 * @method $this setDBInstanceNetType($dBInstanceNetType)
 * @method string getDBInstanceNetType()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($timeType)
 * @method string getTimeType()
 * @method $this setQuantity($quantity)
 * @method int getQuantity()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setInstanceUsedType($instanceUsedType)
 * @method int getInstanceUsedType()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setConnectionMode($connectionMode)
 * @method string getConnectionMode()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setCountryCode($countryCode)
 * @method string getCountryCode()
 * @method $this setCurrencyCode($currencyCode)
 * @method string getCurrencyCode()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 * @method $this setPromotionCode($promotionCode)
 * @method string getPromotionCode()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceStorageType($dBInstanceStorageType)
 * @method string getDBInstanceStorageType()
 * @method $this setNodeType($nodeType)
 * @method string getNodeType()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setZoneIdSlave1($zoneIdSlave1)
 * @method string getZoneIdSlave1()
 * @method $this setZoneIdSlave2($zoneIdSlave2)
 * @method string getZoneIdSlave2()
 */
class CreateOrder extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBInstanceMonitor extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPreCheckId($preCheckId)
 * @method string getPreCheckId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribePreCheckResults extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionString($connectionString)
 * @method string getConnectionString()
 * @method $this setClassicExpiredDays($classicExpiredDays)
 * @method int getClassicExpiredDays()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBInstanceNetExpireTime extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ResetAccountPassword extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeDBInstancesAsCsv extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setCountryCode($countryCode)
 * @method string getCountryCode()
 * @method $this setCurrencyCode($currencyCode)
 * @method string getCurrencyCode()
 * @method $this setPromotionCode($promotionCode)
 * @method string getPromotionCode()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 */
class QueryPriceForRefund extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setBackupStrategy($backupStrategy)
 * @method string getBackupStrategy()
 * @method $this setBackupMethod($backupMethod)
 * @method string getBackupMethod()
 * @method $this setBackupType($backupType)
 * @method string getBackupType()
 */
class CreateBackup extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionString($connectionString)
 * @method string getConnectionString()
 */
class UpgradeDBInstanceNetWorkInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setReadSQLReplicationTime($readSQLReplicationTime)
 * @method string getReadSQLReplicationTime()
 */
class ModifyDBInstanceDelayedReplicationTime extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setUpgradeTime($upgradeTime)
 * @method string getUpgradeTime()
 * @method $this setSwitchTime($switchTime)
 * @method string getSwitchTime()
 */
class UpgradeDBInstanceKernelVersion extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setIsOnlineDB($isOnlineDB)
 * @method string getIsOnlineDB()
 * @method $this setOSSUrls($oSSUrls)
 * @method string getOSSUrls()
 */
class CreateMigrateTaskForSQLServer extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class ModifyCommodity extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeFilesForSQLServer extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRetainClassic($retainClassic)
 * @method string getRetainClassic()
 * @method $this setClassicExpiredDays($classicExpiredDays)
 * @method string getClassicExpiredDays()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setReadWriteSplittingClassicExpiredDays($readWriteSplittingClassicExpiredDays)
 * @method int getReadWriteSplittingClassicExpiredDays()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setReadWriteSplittingPrivateIpAddress($readWriteSplittingPrivateIpAddress)
 * @method string getReadWriteSplittingPrivateIpAddress()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBInstanceNetworkType extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setStartPoint($startPoint)
 * @method string getStartPoint()
 * @method $this setEndPoint($endPoint)
 * @method string getEndPoint()
 */
class DescribeDBInstanceNetworkDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSecurityIps($securityIps)
 * @method string getSecurityIps()
 * @method $this setDBInstanceIPArrayName($dBInstanceIPArrayName)
 * @method string getDBInstanceIPArrayName()
 * @method $this setDBInstanceIPArrayAttribute($dBInstanceIPArrayAttribute)
 * @method string getDBInstanceIPArrayAttribute()
 * @method $this setSecurityIPType($securityIPType)
 * @method string getSecurityIPType()
 * @method $this setWhitelistNetworkType($whitelistNetworkType)
 * @method string getWhitelistNetworkType()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setModifyMode($modifyMode)
 * @method string getModifyMode()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifySecurityIpsForChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setRecoverMode($recoverMode)
 * @method string getRecoverMode()
 */
class ModifyReplicaRecoverMode extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDatabaseLockDiagnosis extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setSourceDBInstanceId($sourceDBInstanceId)
 * @method string getSourceDBInstanceId()
 * @method $this setDestinationDBInstanceId($destinationDBInstanceId)
 * @method string getDestinationDBInstanceId()
 */
class DescribeReplicaUsage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setIsHistory($isHistory)
 * @method int getIsHistory()
 */
class DescribeActiveOperationTaskRegion extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeSQLCollectorPolicy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($timeType)
 * @method string getTimeType()
 * @method $this setQuantity($quantity)
 * @method int getQuantity()
 * @method $this setInstanceUsedType($instanceUsedType)
 * @method int getInstanceUsedType()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 */
class DescribePrice extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class PurgeDBInstanceLog extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDBInstanceSwitchLog extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setLockReason($lockReason)
 * @method string getLockReason()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class LockDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeSQLCollectorRetention extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 */
class EvaluateFailOverSwitch extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeMigrateCountInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 */
class DescribeSQLServerUpgradeVersions extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setParameterGroupId($parameterGroupId)
 * @method string getParameterGroupId()
 */
class DeleteParameterGroup extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeSqlLogDumpStatus extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 */
class CreateUploadPathForSQLServer extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setMaxDelayTime($maxDelayTime)
 * @method string getMaxDelayTime()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setDistributionType($distributionType)
 * @method string getDistributionType()
 * @method $this setWeight($weight)
 * @method string getWeight()
 */
class AllocateReadWriteSplittingConnection extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setFlag($flag)
 * @method string getFlag()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupJobId($backupJobId)
 * @method string getBackupJobId()
 * @method $this setBackupMode($backupMode)
 * @method string getBackupMode()
 * @method $this setBackupJobStatus($backupJobStatus)
 * @method string getBackupJobStatus()
 */
class DescribeBackupTasks extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeErrorLogs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeRegionsForChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRetainClassic($retainClassic)
 * @method string getRetainClassic()
 * @method $this setClassicExpiredDays($classicExpiredDays)
 * @method string getClassicExpiredDays()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 */
class AllocateClassicNetworkType extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setReadSQLReplicationTime($readSQLReplicationTime)
 * @method string getReadSQLReplicationTime()
 */
class ModifyDBInstanceDelayReplicationTime extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($timeType)
 * @method string getTimeType()
 * @method $this setQuantity($quantity)
 * @method int getQuantity()
 * @method $this setInstanceUsedType($instanceUsedType)
 * @method int getInstanceUsedType()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 */
class QueryPriceForBuy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 */
class DeleteDampPolicy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeDBInstanceEncryptionKey extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIds($ids)
 * @method string getIds()
 * @method $this setSwitchTime($switchTime)
 * @method string getSwitchTime()
 */
class ModifyActiveOperationTask extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setServiceRequestType($serviceRequestType)
 * @method string getServiceRequestType()
 * @method $this setServiceRequestParam($serviceRequestParam)
 * @method string getServiceRequestParam()
 */
class RequestServiceOfCloudDBExpert extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setBackupStatus($backupStatus)
 * @method string getBackupStatus()
 * @method $this setBackupMode($backupMode)
 * @method string getBackupMode()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeBackups extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSourceDatabaseIp($sourceDatabaseIp)
 * @method string getSourceDatabaseIp()
 * @method $this setSourceDatabasePort($sourceDatabasePort)
 * @method string getSourceDatabasePort()
 * @method $this setSourceDatabaseUserName($sourceDatabaseUserName)
 * @method string getSourceDatabaseUserName()
 * @method $this setSourceDatabasePassword($sourceDatabasePassword)
 * @method string getSourceDatabasePassword()
 * @method $this setImportDataType($importDataType)
 * @method string getImportDataType()
 * @method $this setSourceDatabaseDBNames($sourceDatabaseDBNames)
 * @method string getSourceDatabaseDBNames()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class PreCheckBeforeImportData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteAccount extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeVerificationList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class ReleaseReadWriteSplittingConnection extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceUsedType($instanceUsedType)
 * @method string getInstanceUsedType()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSpecifyCount($specifyCount)
 * @method string getSpecifyCount()
 * @method $this setHostType($hostType)
 * @method string getHostType()
 */
class DescribeRegionAvailability extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setAccountDescription($accountDescription)
 * @method string getAccountDescription()
 * @method $this setAccountType($accountType)
 * @method string getAccountType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateAccount extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setMaxRecordsPerPage($maxRecordsPerPage)
 * @method int getMaxRecordsPerPage()
 * @method $this setPageNumbers($pageNumbers)
 * @method int getPageNumbers()
 * @method $this setQueryKeyword($queryKeyword)
 * @method string getQueryKeyword()
 * @method $this setHostAddress($hostAddress)
 * @method string getHostAddress()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 * @method $this setSortKey($sortKey)
 * @method string getSortKey()
 * @method $this setSortMethod($sortMethod)
 * @method string getSortMethod()
 * @method $this setMinConsume($minConsume)
 * @method int getMinConsume()
 * @method $this setMaxConsume($maxConsume)
 * @method int getMaxConsume()
 * @method $this setMinScanRows($minScanRows)
 * @method int getMinScanRows()
 * @method $this setMaxScanRows($maxScanRows)
 * @method int getMaxScanRows()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setSqlType($sqlType)
 * @method string getSqlType()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setThreadID($threadID)
 * @method string getThreadID()
 * @method $this setPagingID($pagingID)
 * @method string getPagingID()
 * @method $this setLogicalOperator($logicalOperator)
 * @method string getLogicalOperator()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DescribeSQLLogRecordsList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 */
class DescribeInstanceVpcMigrateInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setCollation($collation)
 * @method string getCollation()
 * @method $this setTimezone($timezone)
 * @method string getTimezone()
 */
class ModifyCollationTimeZone extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTargetAliUid($targetAliUid)
 * @method string getTargetAliUid()
 * @method $this setTargetAliBid($targetAliBid)
 * @method string getTargetAliBid()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setBackupLocation($backupLocation)
 * @method string getBackupLocation()
 * @method $this setBackupStatus($backupStatus)
 * @method string getBackupStatus()
 * @method $this setBackupMode($backupMode)
 * @method string getBackupMode()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeBackupsForSecurity extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class RestoreDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 */
class DescribeRdsVpcs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setSourceInstanceId($sourceInstanceId)
 * @method string getSourceInstanceId()
 * @method $this setDestinationInstanceId($destinationInstanceId)
 * @method string getDestinationInstanceId()
 */
class DescribeStaticVerificationList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDuration($duration)
 * @method string getDuration()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 */
class ModifyInstanceAutoRenewalAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeSecurityGroupConfiguration extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UnlockDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNewUID($newUID)
 * @method string getNewUID()
 */
class ModifyDBInstanceOwner extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeDBInstanceProxyConfiguration extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class ModifyResourceGroup extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class CheckCloudResourceAuthorized extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionString($connectionString)
 * @method string getConnectionString()
 * @method $this setClassicExpiredDays($classicExpiredDays)
 * @method int getClassicExpiredDays()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBInstanceNetworkExpireTime extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSecurityIps($securityIps)
 * @method string getSecurityIps()
 * @method $this setDBInstanceIPArrayName($dBInstanceIPArrayName)
 * @method string getDBInstanceIPArrayName()
 * @method $this setDBInstanceIPArrayAttribute($dBInstanceIPArrayAttribute)
 * @method string getDBInstanceIPArrayAttribute()
 * @method $this setSecurityIPType($securityIPType)
 * @method string getSecurityIPType()
 * @method $this setWhitelistNetworkType($whitelistNetworkType)
 * @method string getWhitelistNetworkType()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setModifyMode($modifyMode)
 * @method string getModifyMode()
 */
class ModifySecurityIps extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSQLId($sQLId)
 * @method int getSQLId()
 * @method $this setQueryKeywords($queryKeywords)
 * @method string getQueryKeywords()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setDatabase($database)
 * @method string getDatabase()
 * @method $this setUser($user)
 * @method string getUser()
 * @method $this setForm($form)
 * @method string getForm()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeSQLLogRecords extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setExpiredTime($expiredTime)
 * @method string getExpiredTime()
 * @method $this setPrivileges($privileges)
 * @method string getPrivileges()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GrantOperatorPermission extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeInstanceAutoRenewAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setImportId($importId)
 * @method int getImportId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescibeImportsFromDatabase extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class StartSqlLogTrail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setEffectiveTime($effectiveTime)
 * @method string getEffectiveTime()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setZoneIdSlave1($zoneIdSlave1)
 * @method string getZoneIdSlave1()
 * @method $this setZoneIdSlave2($zoneIdSlave2)
 * @method string getZoneIdSlave2()
 */
class MigrateToOtherZone extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTargetDBInstanceId($targetDBInstanceId)
 * @method string getTargetDBInstanceId()
 * @method $this setDbNames($dbNames)
 * @method string getDbNames()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setSyncUserPrivilege($syncUserPrivilege)
 * @method string getSyncUserPrivilege()
 */
class CopyDatabaseBetweenInstances extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTargetRegionId($targetRegionId)
 * @method string getTargetRegionId()
 * @method $this setTargetZoneId($targetZoneId)
 * @method string getTargetZoneId()
 * @method $this setTargetVpcId($targetVpcId)
 * @method string getTargetVpcId()
 * @method $this setTargetVSwitchId($targetVSwitchId)
 * @method string getTargetVSwitchId()
 * @method $this setSwitchTime($switchTime)
 * @method string getSwitchTime()
 * @method $this setEffectiveTime($effectiveTime)
 * @method string getEffectiveTime()
 */
class MigrateToOtherRegion extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($timeType)
 * @method string getTimeType()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setEffectiveTime($effectiveTime)
 * @method string getEffectiveTime()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setPromotionCode($promotionCode)
 * @method string getPromotionCode()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setDBInstanceStorageType($dBInstanceStorageType)
 * @method string getDBInstanceStorageType()
 * @method $this setNodeType($nodeType)
 * @method string getNodeType()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 */
class CreateOrderForModify extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDBInstanceNetwork extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 */
class DescribeRdsVSwitchs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeSQLLogReports extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setDBInstanceStorageType($dBInstanceStorageType)
 * @method string getDBInstanceStorageType()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateTempDBInstanceForChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class DescribeLogicDBInstanceTopology extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeOperatorPermission extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setFlag($flag)
 * @method string getFlag()
 * @method $this setDBInstanceNetRWSplitType($dBInstanceNetRWSplitType)
 * @method string getDBInstanceNetRWSplitType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDBInstanceNetInfo extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setUsedTime($usedTime)
 * @method int getUsedTime()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 */
class ModifyDBInstancePayType extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ResetAccount extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setExpired($expired)
 * @method string getExpired()
 */
class DescribeDBInstanceAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDBInstanceTDE extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setLcuQuota($lcuQuota)
 * @method string getLcuQuota()
 * @method $this setStorageQuota($storageQuota)
 * @method string getStorageQuota()
 * @method $this setSpecQuota($specQuota)
 * @method string getSpecQuota()
 * @method $this setSearchType($searchType)
 * @method string getSearchType()
 */
class ModifyOpenSearchDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ExtractBackupFromOAS extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeLogBackupFiles extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeOptimizeAdviceOnBigTable extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ResetAccountForPG extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setRecoveryMode($recoveryMode)
 * @method string getRecoveryMode()
 */
class ModifyReplicaRecoveryMode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setSortMethod($sortMethod)
 * @method string getSortMethod()
 * @method $this setSortKey($sortKey)
 * @method string getSortKey()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setTag1key($tag1key)
 * @method string getTag1key()
 * @method $this setTag2key($tag2key)
 * @method string getTag2key()
 * @method $this setTag3key($tag3key)
 * @method string getTag3key()
 * @method $this setTag4key($tag4key)
 * @method string getTag4key()
 * @method $this setTag5key($tag5key)
 * @method string getTag5key()
 * @method $this setTag1value($tag1value)
 * @method string getTag1value()
 * @method $this setTag2value($tag2value)
 * @method string getTag2value()
 * @method $this setTag3value($tag3value)
 * @method string getTag3value()
 * @method $this setTag4value($tag4value)
 * @method string getTag4value()
 * @method $this setTag5value($tag5value)
 * @method string getTag5value()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDBInstancesByPerformance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setCharacterSetName($characterSetName)
 * @method string getCharacterSetName()
 * @method $this setDBDescription($dBDescription)
 * @method string getDBDescription()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPrivilege($accountPrivilege)
 * @method string getAccountPrivilege()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateDatabaseForInner extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setSourceInstanceId($sourceInstanceId)
 * @method string getSourceInstanceId()
 * @method $this setDestinationInstanceId($destinationInstanceId)
 * @method string getDestinationInstanceId()
 */
class CreateStaticVerification extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class DescribeRegions extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeSQLReports extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setTaskAction($taskAction)
 * @method string getTaskAction()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeTasks extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeInstanceAutoRenewalAttribute extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class CalculateDBInstanceWeight extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSQLHASH($sQLHASH)
 * @method string getSQLHASH()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeSlowLogRecords extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeActiveOperationTaskCount extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setDBInstanceStorageType($dBInstanceStorageType)
 * @method string getDBInstanceStorageType()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($timeType)
 * @method string getTimeType()
 * @method $this setQuantity($quantity)
 * @method int getQuantity()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setInstanceUsedType($instanceUsedType)
 * @method int getInstanceUsedType()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setCountryCode($countryCode)
 * @method string getCountryCode()
 * @method $this setCurrencyCode($currencyCode)
 * @method string getCurrencyCode()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setPromotionCode($promotionCode)
 * @method string getPromotionCode()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setCloneInstanceDefaultValue($cloneInstanceDefaultValue)
 * @method string getCloneInstanceDefaultValue()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setDBNames($dBNames)
 * @method string getDBNames()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setTableMeta($tableMeta)
 * @method string getTableMeta()
 * @method $this setRestoreTable($restoreTable)
 * @method string getRestoreTable()
 * @method $this setNodeType($nodeType)
 * @method string getNodeType()
 */
class CreateOrderForClone extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ResetAdminAccountPassword extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeOptimizeAdviceOnExcessIndex extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setPrimaryInstanceId($primaryInstanceId)
 * @method string getPrimaryInstanceId()
 */
class SwitchOver extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeCustinsKernelReleaseNotes extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setDynamicMode($dynamicMode)
 * @method string getDynamicMode()
 */
class ModifyDynamicMode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeDBInstanceECSSGRelation extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountDescription($accountDescription)
 * @method string getAccountDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyAccountDescription extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class BatchRevokeAccountPrivilege extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class CreateDiagnosticReport extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setProxyConfigurationKey($proxyConfigurationKey)
 * @method string getProxyConfigurationKey()
 * @method $this setProxyConfigurationValue($proxyConfigurationValue)
 * @method string getProxyConfigurationValue()
 */
class ModifyDBInstanceProxyConfiguration extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setParameterGroupId($parameterGroupId)
 * @method string getParameterGroupId()
 * @method $this setParameterGroupName($parameterGroupName)
 * @method string getParameterGroupName()
 * @method $this setParameterGroupDesc($parameterGroupDesc)
 * @method string getParameterGroupDesc()
 * @method $this setParameters($parameters)
 * @method string getParameters()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ModifyParameterGroup extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setTag1key($tag1key)
 * @method string getTag1key()
 * @method $this setTag2key($tag2key)
 * @method string getTag2key()
 * @method $this setTag3key($tag3key)
 * @method string getTag3key()
 * @method $this setTag4key($tag4key)
 * @method string getTag4key()
 * @method $this setTag5key($tag5key)
 * @method string getTag5key()
 * @method $this setTag1value($tag1value)
 * @method string getTag1value()
 * @method $this setTag2value($tag2value)
 * @method string getTag2value()
 * @method $this setTag3value($tag3value)
 * @method string getTag3value()
 * @method $this setTag4value($tag4value)
 * @method string getTag4value()
 * @method $this setTag5value($tag5value)
 * @method string getTag5value()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeAbnormalDBInstances extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeSqlLogDetailArchiveStatus extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setJuShiTaInstanceUid($juShiTaInstanceUid)
 * @method int getJuShiTaInstanceUid()
 */
class ModifyDBInstanceChargeTypeForJuShiTa extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setDBDescription($dBDescription)
 * @method string getDBDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBDescription extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class QueryOssBuckets extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setSystemDBCharset($systemDBCharset)
 * @method string getSystemDBCharset()
 * @method $this setDBInstanceNetType($dBInstanceNetType)
 * @method string getDBInstanceNetType()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($timeType)
 * @method string getTimeType()
 * @method $this setQuantity($quantity)
 * @method int getQuantity()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setInstanceUsedType($instanceUsedType)
 * @method int getInstanceUsedType()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setConnectionMode($connectionMode)
 * @method string getConnectionMode()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setCountryCode($countryCode)
 * @method string getCountryCode()
 * @method $this setCurrencyCode($currencyCode)
 * @method string getCurrencyCode()
 * @method $this setDBInstanceStorageType($dBInstanceStorageType)
 * @method string getDBInstanceStorageType()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setPromotionCode($promotionCode)
 * @method string getPromotionCode()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setOrderParamOut($orderParamOut)
 * @method string getOrderParamOut()
 */
class QueryPrice extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeInstanceKeywords extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class CheckInstanceExsit extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setHandlers($handlers)
 * @method string getHandlers()
 * @method $this setSourceRules($sourceRules)
 * @method string getSourceRules()
 * @method $this setTimeRules($timeRules)
 * @method string getTimeRules()
 * @method $this setActionRules($actionRules)
 * @method string getActionRules()
 */
class ModifyDampPolicy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setSourceDBInstanceId($sourceDBInstanceId)
 * @method string getSourceDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setSystemDBCharset($systemDBCharset)
 * @method string getSystemDBCharset()
 * @method $this setDBInstanceNetType($dBInstanceNetType)
 * @method string getDBInstanceNetType()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setConnectionMode($connectionMode)
 * @method string getConnectionMode()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setReplicaDescription($replicaDescription)
 * @method string getReplicaDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setReplicaMode($replicaMode)
 * @method string getReplicaMode()
 * @method $this setDomainMode($domainMode)
 * @method string getDomainMode()
 */
class CreateDBInstanceReplica extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeDampPoliciesByCid extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeParameters extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTriggerId($triggerId)
 * @method string getTriggerId()
 */
class DescribeFCTrigger extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 */
class ModifyReplicaRelation extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTDEStatus($tDEStatus)
 * @method string getTDEStatus()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setEncryptionKey($encryptionKey)
 * @method string getEncryptionKey()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 */
class ModifyDBInstanceTDE extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class RevokeAccountPrivilege extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setSubDomain($subDomain)
 * @method string getSubDomain()
 */
class CompensateInstanceForChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setSyncMode($syncMode)
 * @method string getSyncMode()
 * @method $this setHAMode($hAMode)
 * @method string getHAMode()
 * @method $this setDbInstanceId($dbInstanceId)
 * @method string getDbInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBInstanceHAConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setImportId($importId)
 * @method int getImportId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CancelImport extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteBackup extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 */
class CreateMulOrderForDefer extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTableMeta($tableMeta)
 * @method string getTableMeta()
 */
class RestoreTable extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class CopyDatabase extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSQLDiagId($sQLDiagId)
 * @method string getSQLDiagId()
 */
class DescribeSQLDiagnosis extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setParam($param)
 * @method string getParam()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 */
class QueryPriceMulti extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDBInstancePerformance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($timeType)
 * @method string getTimeType()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 * @method $this setPromotionCode($promotionCode)
 * @method string getPromotionCode()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setRebuildInstanceFlag($rebuildInstanceFlag)
 * @method bool getRebuildInstanceFlag()
 */
class CreateOrderForRebuild extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeReplicaConflictInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setParameterGroupId($parameterGroupId)
 * @method string getParameterGroupId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeParameterGroup extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionMode($connectionMode)
 * @method string getConnectionMode()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBInstanceConnectionMode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class StartDBInstanceDiagnose extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($timeType)
 * @method string getTimeType()
 * @method $this setQuantity($quantity)
 * @method int getQuantity()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setPromotionCode($promotionCode)
 * @method string getPromotionCode()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 */
class DescribeRenewalPrice extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DescribeSqlTemplatesConsumeAndScanRows extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method int getBackupId()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateTempDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setDynamicMode($dynamicMode)
 * @method string getDynamicMode()
 */
class ModifyReplicaDynamicMode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setConnectionStringType($connectionStringType)
 * @method string getConnectionStringType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SwitchDBInstanceNetType extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setGuardDBInstanceId($guardDBInstanceId)
 * @method string getGuardDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReceiveDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setReadInstanceId($readInstanceId)
 * @method string getReadInstanceId()
 */
class DescribeReadDBInstanceDelay extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConfigValue($configValue)
 * @method string getConfigValue()
 */
class ModifySQLCollectorRetention extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setServiceRequestType($serviceRequestType)
 * @method string getServiceRequestType()
 * @method $this setServiceRequestParam($serviceRequestParam)
 * @method string getServiceRequestParam()
 */
class RequestServiceOfCloudDBA extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAddressIP($addressIP)
 * @method string getAddressIP()
 * @method $this setAddressPort($addressPort)
 * @method string getAddressPort()
 */
class DescribeDBInstanceInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setMaintainTime($maintainTime)
 * @method string getMaintainTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBInstanceMaintainTime extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDBInstanceByTags extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AllocateInstancePrivateConnection extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setMaxRecordsPerPage($maxRecordsPerPage)
 * @method int getMaxRecordsPerPage()
 * @method $this setPageNumbers($pageNumbers)
 * @method int getPageNumbers()
 * @method $this setMinAvgConsume($minAvgConsume)
 * @method int getMinAvgConsume()
 * @method $this setMaxAvgConsume($maxAvgConsume)
 * @method int getMaxAvgConsume()
 * @method $this setMinAvgScanRows($minAvgScanRows)
 * @method int getMinAvgScanRows()
 * @method $this setMaxAvgScanRows($maxAvgScanRows)
 * @method int getMaxAvgScanRows()
 * @method $this setPagingId($pagingId)
 * @method string getPagingId()
 * @method $this setSortKey($sortKey)
 * @method string getSortKey()
 * @method $this setSortMethod($sortMethod)
 * @method string getSortMethod()
 * @method $this setSqType($sqType)
 * @method string getSqType()
 */
class DescribeTemplatesList extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class CreateSQLDiagnosis extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setBackupMode($backupMode)
 * @method string getBackupMode()
 * @method $this setIsOnlineDB($isOnlineDB)
 * @method string getIsOnlineDB()
 * @method $this setCheckDBMode($checkDBMode)
 * @method string getCheckDBMode()
 * @method $this setOssObjectPositions($ossObjectPositions)
 * @method string getOssObjectPositions()
 * @method $this setOSSUrls($oSSUrls)
 * @method string getOSSUrls()
 * @method $this setMigrateTaskId($migrateTaskId)
 * @method string getMigrateTaskId()
 */
class CreateMigrateTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeTags extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeDiagnosticReportList extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTriggerId($triggerId)
 * @method string getTriggerId()
 * @method $this setTriggerArn($triggerArn)
 * @method string getTriggerArn()
 * @method $this setFunctionArn($functionArn)
 * @method string getFunctionArn()
 * @method $this setSourceArn($sourceArn)
 * @method string getSourceArn()
 * @method $this setInvocationRoleArn($invocationRoleArn)
 * @method string getInvocationRoleArn()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSubscriptionObjects($subscriptionObjects)
 * @method array getSubscriptionObjects()
 * @method $this setEventFormat($eventFormat)
 * @method string getEventFormat()
 * @method $this setConcurrency($concurrency)
 * @method int getConcurrency()
 * @method $this setRetry($retry)
 * @method int getRetry()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateFCTrigger extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTargetRegionId($targetRegionId)
 * @method string getTargetRegionId()
 * @method $this setTargetZoneId($targetZoneId)
 * @method string getTargetZoneId()
 * @method $this setTargetVpcId($targetVpcId)
 * @method string getTargetVpcId()
 * @method $this setTargetVSwitchId($targetVSwitchId)
 * @method string getTargetVSwitchId()
 */
class AllocateInstanceVpcNetworkType extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class DescribeTaskInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class DescribeCollationTimeZones extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeCharacterSetName extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeResourceDiagnosis extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setDBInstanceNetType($dBInstanceNetType)
 * @method string getDBInstanceNetType()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreatePostpaidDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSourceDatabaseIp($sourceDatabaseIp)
 * @method string getSourceDatabaseIp()
 * @method $this setSourceDatabasePort($sourceDatabasePort)
 * @method string getSourceDatabasePort()
 * @method $this setSourceDatabaseUserName($sourceDatabaseUserName)
 * @method string getSourceDatabaseUserName()
 * @method $this setSourceDatabasePassword($sourceDatabasePassword)
 * @method string getSourceDatabasePassword()
 * @method $this setImportDataType($importDataType)
 * @method string getImportDataType()
 * @method $this setIsLockTable($isLockTable)
 * @method string getIsLockTable()
 * @method $this setSourceDatabaseDBNames($sourceDatabaseDBNames)
 * @method string getSourceDatabaseDBNames()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ImportDataFromDatabase extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class RevokeOperatorPermission extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setDBStatus($dBStatus)
 * @method string getDBStatus()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeDatabases extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setServiceRequestType($serviceRequestType)
 * @method string getServiceRequestType()
 * @method $this setServiceRequestParam($serviceRequestParam)
 * @method string getServiceRequestParam()
 */
class DescribeServiceOfCloudDBA extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setFillterDDL($fillterDDL)
 * @method string getFillterDDL()
 */
class ModifyReplicaFilterMode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SwitchDBInstanceChargeType extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeOpenSearchDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeOptimizeAdviceOnMissPK extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 */
class EvaluateFailover extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeSyncAccounts extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 */
class DescribeStrategy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setPrimaryInstanceId($primaryInstanceId)
 * @method string getPrimaryInstanceId()
 */
class Failover extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setMigrateTaskId($migrateTaskId)
 * @method string getMigrateTaskId()
 * @method $this setCheckDBMode($checkDBMode)
 * @method string getCheckDBMode()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateOnlineDatabaseTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeSQLInjectionInfos extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setEffectiveTime($effectiveTime)
 * @method string getEffectiveTime()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 */
class ModifyDBInstanceSpec extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeAvailableInstanceClass extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeModifyParameterLog extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setMaxDelayTime($maxDelayTime)
 * @method string getMaxDelayTime()
 * @method $this setDistributionType($distributionType)
 * @method string getDistributionType()
 * @method $this setWeight($weight)
 * @method string getWeight()
 */
class ModifyReadWriteSplittingConnection extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class AllocateCloudInstanceIp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 */
class DescribeCommodity extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTimeLevel($timeLevel)
 * @method string getTimeLevel()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DescribeSqlLogTimeDistribution extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AllocateInstancePublicConnection extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setEncryptionKey($encryptionKey)
 * @method string getEncryptionKey()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeDBInstancesWithCloudResource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTargetRegionId($targetRegionId)
 * @method string getTargetRegionId()
 * @method $this setParameterGroupId($parameterGroupId)
 * @method string getParameterGroupId()
 */
class CloneParameterGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setImportId($importId)
 * @method int getImportId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeImportsForSQLServer extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setWhitelistNetworkType($whitelistNetworkType)
 * @method string getWhitelistNetworkType()
 */
class DescribeDBInstanceIPArrayList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupPolicyMode($backupPolicyMode)
 * @method string getBackupPolicyMode()
 * @method $this setPreferredBackupTime($preferredBackupTime)
 * @method string getPreferredBackupTime()
 * @method $this setPreferredBackupPeriod($preferredBackupPeriod)
 * @method string getPreferredBackupPeriod()
 * @method $this setBackupRetentionPeriod($backupRetentionPeriod)
 * @method string getBackupRetentionPeriod()
 * @method $this setBackupLog($backupLog)
 * @method string getBackupLog()
 * @method $this setLogBackupRetentionPeriod($logBackupRetentionPeriod)
 * @method string getLogBackupRetentionPeriod()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setEnableBackupLog($enableBackupLog)
 * @method string getEnableBackupLog()
 * @method $this setLocalLogRetentionHours($localLogRetentionHours)
 * @method string getLocalLogRetentionHours()
 * @method $this setLocalLogRetentionSpace($localLogRetentionSpace)
 * @method string getLocalLogRetentionSpace()
 * @method $this setHighSpaceUsageProtection($highSpaceUsageProtection)
 * @method string getHighSpaceUsageProtection()
 * @method $this setDuplication($duplication)
 * @method string getDuplication()
 * @method $this setDuplicationContent($duplicationContent)
 * @method string getDuplicationContent()
 * @method $this setDuplicationLocation($duplicationLocation)
 * @method string getDuplicationLocation()
 * @method $this setLogBackupFrequency($logBackupFrequency)
 * @method string getLogBackupFrequency()
 * @method $this setCompressType($compressType)
 * @method string getCompressType()
 */
class ModifyBackupPolicy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CheckDBNameAvailable extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionString($connectionString)
 * @method string getConnectionString()
 */
class DescribeDBInstanceUser extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTimeLevel($timeLevel)
 * @method string getTimeLevel()
 * @method $this setTemplateHash($templateHash)
 * @method string getTemplateHash()
 * @method $this setSortKey($sortKey)
 * @method string getSortKey()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DescribeSqlLogTemplatesTimeDistribution extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 */
class DescribeBackupDatabase extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setAccountDescription($accountDescription)
 * @method string getAccountDescription()
 * @method $this setAccountType($accountType)
 * @method string getAccountType()
 */
class CreateAdminAccount extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setDomainMode($domainMode)
 * @method string getDomainMode()
 */
class ModifyGuardDomainMode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCategory($category)
 * @method string getCategory()
 */
class DescribeParameterTemplates extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSourceDBInstanceId($sourceDBInstanceId)
 * @method string getSourceDBInstanceId()
 * @method $this setDBInfo($dBInfo)
 * @method string getDBInfo()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ImportDatabaseBetweenInstances extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setAutoPay($autoPay)
 * @method string getAutoPay()
 */
class RenewDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method string getDBInstanceStorage()
 * @method $this setShardsInfo($shardsInfo)
 * @method string getShardsInfo()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class EvaluateResource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DeleteOpenSearchDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeParameterGroups extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setDbNames($dbNames)
 * @method string getDbNames()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 */
class CloneDBInstance extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setServiceRequestType($serviceRequestType)
 * @method string getServiceRequestType()
 * @method $this setServiceRequestParam($serviceRequestParam)
 * @method string getServiceRequestParam()
 */
class LoginDBInstancefromCloudDBA extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setSourceDBInstanceId($sourceDBInstanceId)
 * @method string getSourceDBInstanceId()
 * @method $this setDestinationDBInstanceId($destinationDBInstanceId)
 * @method string getDestinationDBInstanceId()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeReplicaPerformance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DestroyDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeMigrateTasks extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setAutoPay($autoPay)
 * @method string getAutoPay()
 */
class RenewInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setTargetAliUid($targetAliUid)
 * @method string getTargetAliUid()
 * @method $this setTargetAliBid($targetAliBid)
 * @method string getTargetAliBid()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class CloneDBInstanceForSecurity extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setServiceRequestType($serviceRequestType)
 * @method string getServiceRequestType()
 * @method $this setServiceRequestParam($serviceRequestParam)
 * @method string getServiceRequestParam()
 */
class DescribeCloudDBAService extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionString($connectionString)
 * @method string getConnectionString()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBInstanceSSL extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 */
class DescribeVpcZoneNos extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setReadSQLReplicationTime($readSQLReplicationTime)
 * @method string getReadSQLReplicationTime()
 */
class ModifyReadonlyInstanceDelayReplicationTime extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSearchKey($searchKey)
 * @method string getSearchKey()
 * @method $this setDBInstanceUseType($dBInstanceUseType)
 * @method string getDBInstanceUseType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeOperationLogs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 */
class ModifyDBInstanceECSSGRelation extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicaId($replicaId)
 * @method string getReplicaId()
 * @method $this setAttachDbInstanceData($attachDbInstanceData)
 * @method bool getAttachDbInstanceData()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeReplicas extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setSystemDBCharset($systemDBCharset)
 * @method string getSystemDBCharset()
 * @method $this setDBInstanceNetType($dBInstanceNetType)
 * @method string getDBInstanceNetType()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setConnectionMode($connectionMode)
 * @method string getConnectionMode()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setDBInstanceStorageType($dBInstanceStorageType)
 * @method string getDBInstanceStorageType()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 */
class CreateDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 */
class CreateOrderForTempUpgrade extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class DeleteCloudInstanceIp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setParam($param)
 * @method string getParam()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateMulOrderForBuy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeOptimizeAdviceOnStorage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setMaxRecordsPerPage($maxRecordsPerPage)
 * @method int getMaxRecordsPerPage()
 * @method $this setPageNumbers($pageNumbers)
 * @method int getPageNumbers()
 * @method $this setMinAvgConsume($minAvgConsume)
 * @method Float getMinAvgConsume()
 * @method $this setMaxAvgConsume($maxAvgConsume)
 * @method Float getMaxAvgConsume()
 * @method $this setMinAvgScanRows($minAvgScanRows)
 * @method Float getMinAvgScanRows()
 * @method $this setMaxAvgScanRows($maxAvgScanRows)
 * @method Float getMaxAvgScanRows()
 * @method $this setPagingId($pagingId)
 * @method string getPagingId()
 * @method $this setSortKey($sortKey)
 * @method string getSortKey()
 * @method $this setSortMethod($sortMethod)
 * @method string getSortMethod()
 * @method $this setSqlType($sqlType)
 * @method string getSqlType()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DescribeSqlLogTemplatesList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setQueryKeyword($queryKeyword)
 * @method string getQueryKeyword()
 * @method $this setHostAddress($hostAddress)
 * @method string getHostAddress()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 * @method $this setMinConsume($minConsume)
 * @method int getMinConsume()
 * @method $this setMaxConsume($maxConsume)
 * @method int getMaxConsume()
 * @method $this setMinScanRows($minScanRows)
 * @method int getMinScanRows()
 * @method $this setMaxScanRows($maxScanRows)
 * @method int getMaxScanRows()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setSqlType($sqlType)
 * @method string getSqlType()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setThreadID($threadID)
 * @method string getThreadID()
 * @method $this setColumns($columns)
 * @method string getColumns()
 */
class StartSqlLogDetailArchive extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setParameterGroupName($parameterGroupName)
 * @method string getParameterGroupName()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setParameters($parameters)
 * @method string getParameters()
 * @method $this setParameterGroupDesc($parameterGroupDesc)
 * @method string getParameterGroupDesc()
 */
class CreateParameterGroup extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setQueryKeywords($queryKeywords)
 * @method string getQueryKeywords()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setDatabase($database)
 * @method string getDatabase()
 * @method $this setUser($user)
 * @method string getUser()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class StartArchiveSQLLog extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTargetDBInstanceId($targetDBInstanceId)
 * @method string getTargetDBInstanceId()
 * @method $this setDbNames($dbNames)
 * @method string getDbNames()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 */
class RecoveryDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResource($resource)
 * @method string getResource()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setPromotionCode($promotionCode)
 * @method string getPromotionCode()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 */
class QueryPriceMultiForDefer extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeSQLLogReportList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeSQLLogFiles extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyPostpaidDBInstanceSpec extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSQLCollectorStatus($sQLCollectorStatus)
 * @method string getSQLCollectorStatus()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifySQLCollectorPolicy extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeSQLDiagnosisList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setMigrateTaskId($migrateTaskId)
 * @method string getMigrateTaskId()
 */
class DescribeOssDownloads extends Request
{

}