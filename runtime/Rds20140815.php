<?php

namespace aliyun\sdk\services\Rds20140815;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20140815
 *
 * @package aliyun\sdk\services\Rds20140815
 * @method RestartDBInstance RestartDBInstance()
 * @method DescribeDBInstanceSSL DescribeDBInstanceSSL()
 * @method ModifyParameter ModifyParameter()
 * @method MigrateSecurityIPMode MigrateSecurityIPMode()
 * @method DescribeSlowLogs DescribeSlowLogs()
 * @method ModifyDBInstanceConnectionString ModifyDBInstanceConnectionString()
 * @method DescribeDBInstanceHAConfig DescribeDBInstanceHAConfig()
 * @method ModifyMySQLDBInstanceDelay ModifyMySQLDBInstanceDelay()
 * @method SwitchDBInstanceHA SwitchDBInstanceHA()
 * @method DescribeOssDownloadsForSQLServer DescribeOssDownloadsForSQLServer()
 * @method CreateReadOnlyDBInstance CreateReadOnlyDBInstance()
 * @method CheckRecoveryConditions CheckRecoveryConditions()
 * @method DescribeResourceUsage DescribeResourceUsage()
 * @method GrantAccountPrivilege GrantAccountPrivilege()
 * @method DescribeDBInstances DescribeDBInstances()
 * @method AddTagsToResource AddTagsToResource()
 * @method DescribeAccounts DescribeAccounts()
 * @method ModifyDBInstanceDescription ModifyDBInstanceDescription()
 * @method CheckAccountNameAvailable CheckAccountNameAvailable()
 * @method CheckResource CheckResource()
 * @method CreateDatabase CreateDatabase()
 * @method ImportDataForSQLServer ImportDataForSQLServer()
 * @method RemoveTagsFromResource RemoveTagsFromResource()
 * @method ModifyReplicaDescription ModifyReplicaDescription()
 * @method DescribeCloudDbExpertService DescribeCloudDbExpertService()
 * @method DescribeDBInstanceMonitor DescribeDBInstanceMonitor()
 * @method DescribeMigrateTasksForSQLServer DescribeMigrateTasksForSQLServer()
 * @method DescribeAvailableResource DescribeAvailableResource()
 * @method ModifySecurityGroupConfiguration ModifySecurityGroupConfiguration()
 * @method DescribeBackupPolicy DescribeBackupPolicy()
 * @method CheckInstanceExist CheckInstanceExist()
 * @method SwitchDBInstanceVpc SwitchDBInstanceVpc()
 * @method DescribeUserEncryptionKeyList DescribeUserEncryptionKeyList()
 * @method UpgradeDBInstanceEngineVersion UpgradeDBInstanceEngineVersion()
 * @method DeleteDatabase DeleteDatabase()
 * @method DescribeMetaList DescribeMetaList()
 * @method DescribeDBInstancesByExpireTime DescribeDBInstancesByExpireTime()
 * @method ReleaseInstancePublicConnection ReleaseInstancePublicConnection()
 * @method DescribeProxyFunctionSupport DescribeProxyFunctionSupport()
 * @method DescribeBinlogFiles DescribeBinlogFiles()
 * @method ModifyDBInstanceMonitor ModifyDBInstanceMonitor()
 * @method ResetAccountPassword ResetAccountPassword()
 * @method DescribeDBInstancesAsCsv DescribeDBInstancesAsCsv()
 * @method CreateBackup CreateBackup()
 * @method UpgradeDBInstanceKernelVersion UpgradeDBInstanceKernelVersion()
 * @method CreateMigrateTaskForSQLServer CreateMigrateTaskForSQLServer()
 * @method ModifyDBInstanceNetworkType ModifyDBInstanceNetworkType()
 * @method DescribePrice DescribePrice()
 * @method PurgeDBInstanceLog PurgeDBInstanceLog()
 * @method AllocateReadWriteSplittingConnection AllocateReadWriteSplittingConnection()
 * @method DescribeBackupTasks DescribeBackupTasks()
 * @method DescribeErrorLogs DescribeErrorLogs()
 * @method DescribeDBInstanceEncryptionKey DescribeDBInstanceEncryptionKey()
 * @method RequestServiceOfCloudDBExpert RequestServiceOfCloudDBExpert()
 * @method DescribeBackups DescribeBackups()
 * @method DeleteAccount DeleteAccount()
 * @method ReleaseReadWriteSplittingConnection ReleaseReadWriteSplittingConnection()
 * @method CreateAccount CreateAccount()
 * @method DescribeInstanceVpcMigrateInfo DescribeInstanceVpcMigrateInfo()
 * @method ModifyCollationTimeZone ModifyCollationTimeZone()
 * @method RestoreDBInstance RestoreDBInstance()
 * @method ModifyInstanceAutoRenewalAttribute ModifyInstanceAutoRenewalAttribute()
 * @method DescribeSecurityGroupConfiguration DescribeSecurityGroupConfiguration()
 * @method DescribeDBInstanceProxyConfiguration DescribeDBInstanceProxyConfiguration()
 * @method ModifyResourceGroup ModifyResourceGroup()
 * @method CheckCloudResourceAuthorized CheckCloudResourceAuthorized()
 * @method ModifyDBInstanceNetworkExpireTime ModifyDBInstanceNetworkExpireTime()
 * @method ModifySecurityIps ModifySecurityIps()
 * @method DescribeSQLLogRecords DescribeSQLLogRecords()
 * @method GrantOperatorPermission GrantOperatorPermission()
 * @method DescibeImportsFromDatabase DescibeImportsFromDatabase()
 * @method MigrateToOtherZone MigrateToOtherZone()
 * @method CopyDatabaseBetweenInstances CopyDatabaseBetweenInstances()
 * @method MigrateToOtherRegion MigrateToOtherRegion()
 * @method DescribeSQLLogReports DescribeSQLLogReports()
 * @method DescribeDBInstanceNetInfo DescribeDBInstanceNetInfo()
 * @method ResetAccount ResetAccount()
 * @method DescribeDBInstanceAttribute DescribeDBInstanceAttribute()
 * @method DescribeDBInstanceTDE DescribeDBInstanceTDE()
 * @method DescribeLogBackupFiles DescribeLogBackupFiles()
 * @method ResetAccountForPG ResetAccountForPG()
 * @method DescribeDBInstancesByPerformance DescribeDBInstancesByPerformance()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeSQLReports DescribeSQLReports()
 * @method DescribeTasks DescribeTasks()
 * @method DescribeInstanceAutoRenewalAttribute DescribeInstanceAutoRenewalAttribute()
 * @method CalculateDBInstanceWeight CalculateDBInstanceWeight()
 * @method DescribeSlowLogRecords DescribeSlowLogRecords()
 * @method DeleteDBInstance DeleteDBInstance()
 * @method ModifyAccountDescription ModifyAccountDescription()
 * @method ModifyDBInstanceProxyConfiguration ModifyDBInstanceProxyConfiguration()
 * @method ModifyDBDescription ModifyDBDescription()
 * @method CreateDBInstanceReplica CreateDBInstanceReplica()
 * @method DescribeParameters DescribeParameters()
 * @method ModifyDBInstanceTDE ModifyDBInstanceTDE()
 * @method RevokeAccountPrivilege RevokeAccountPrivilege()
 * @method ModifyDBInstanceHAConfig ModifyDBInstanceHAConfig()
 * @method CancelImport CancelImport()
 * @method DeleteBackup DeleteBackup()
 * @method RestoreTable RestoreTable()
 * @method CopyDatabase CopyDatabase()
 * @method DescribeDBInstancePerformance DescribeDBInstancePerformance()
 * @method ModifyDBInstanceConnectionMode ModifyDBInstanceConnectionMode()
 * @method DescribeRenewalPrice DescribeRenewalPrice()
 * @method CreateTempDBInstance CreateTempDBInstance()
 * @method SwitchDBInstanceNetType SwitchDBInstanceNetType()
 * @method DescribeReadDBInstanceDelay DescribeReadDBInstanceDelay()
 * @method ModifyDBInstanceMaintainTime ModifyDBInstanceMaintainTime()
 * @method DescribeDBInstanceByTags DescribeDBInstanceByTags()
 * @method AllocateInstancePrivateConnection AllocateInstancePrivateConnection()
 * @method DescribeTemplatesList DescribeTemplatesList()
 * @method CreateMigrateTask CreateMigrateTask()
 * @method DescribeTags DescribeTags()
 * @method DescribeDiagnosticReportList DescribeDiagnosticReportList()
 * @method AllocateInstanceVpcNetworkType AllocateInstanceVpcNetworkType()
 * @method DescribeTaskInfo DescribeTaskInfo()
 * @method DescribeCollationTimeZones DescribeCollationTimeZones()
 * @method DescribeCharacterSetName DescribeCharacterSetName()
 * @method RevokeOperatorPermission RevokeOperatorPermission()
 * @method DescribeDatabases DescribeDatabases()
 * @method CreateOnlineDatabaseTask CreateOnlineDatabaseTask()
 * @method ModifyDBInstanceSpec ModifyDBInstanceSpec()
 * @method DescribeAvailableInstanceClass DescribeAvailableInstanceClass()
 * @method DescribeModifyParameterLog DescribeModifyParameterLog()
 * @method ModifyReadWriteSplittingConnection ModifyReadWriteSplittingConnection()
 * @method AllocateInstancePublicConnection AllocateInstancePublicConnection()
 * @method DescribeDBInstancesWithCloudResource DescribeDBInstancesWithCloudResource()
 * @method DescribeDBInstanceIPArrayList DescribeDBInstanceIPArrayList()
 * @method ModifyBackupPolicy ModifyBackupPolicy()
 * @method DescribeBackupDatabase DescribeBackupDatabase()
 * @method DescribeParameterTemplates DescribeParameterTemplates()
 * @method ImportDatabaseBetweenInstances ImportDatabaseBetweenInstances()
 * @method CloneDBInstance CloneDBInstance()
 * @method DescribeMigrateTasks DescribeMigrateTasks()
 * @method RenewInstance RenewInstance()
 * @method ModifyDBInstanceSSL ModifyDBInstanceSSL()
 * @method ModifyReadonlyInstanceDelayReplicationTime ModifyReadonlyInstanceDelayReplicationTime()
 * @method CreateDBInstance CreateDBInstance()
 * @method RecoveryDBInstance RecoveryDBInstance()
 * @method DescribeSQLLogReportList DescribeSQLLogReportList()
 * @method DescribeSQLLogFiles DescribeSQLLogFiles()
 * @method ModifySQLCollectorPolicy ModifySQLCollectorPolicy()
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
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
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
class GrantAccountPrivilege extends Request
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
 * @method $this setTag_1_key($tag_1_key)
 * @method string getTag_1_key()
 * @method $this setTag_2_key($tag_2_key)
 * @method string getTag_2_key()
 * @method $this setTag_3_key($tag_3_key)
 * @method string getTag_3_key()
 * @method $this setTag_4_key($tag_4_key)
 * @method string getTag_4_key()
 * @method $this setTag_5_key($tag_5_key)
 * @method string getTag_5_key()
 * @method $this setTag_1_value($tag_1_value)
 * @method string getTag_1_value()
 * @method $this setTag_2_value($tag_2_value)
 * @method string getTag_2_value()
 * @method $this setTag_3_value($tag_3_value)
 * @method string getTag_3_value()
 * @method $this setTag_4_value($tag_4_value)
 * @method string getTag_4_value()
 * @method $this setTag_5_value($tag_5_value)
 * @method string getTag_5_value()
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
 * @method $this setTag_1_key($tag_1_key)
 * @method string getTag_1_key()
 * @method $this setTag_2_key($tag_2_key)
 * @method string getTag_2_key()
 * @method $this setTag_3_key($tag_3_key)
 * @method string getTag_3_key()
 * @method $this setTag_4_key($tag_4_key)
 * @method string getTag_4_key()
 * @method $this setTag_5_key($tag_5_key)
 * @method string getTag_5_key()
 * @method $this setTag_1_value($tag_1_value)
 * @method string getTag_1_value()
 * @method $this setTag_2_value($tag_2_value)
 * @method string getTag_2_value()
 * @method $this setTag_3_value($tag_3_value)
 * @method string getTag_3_value()
 * @method $this setTag_4_value($tag_4_value)
 * @method string getTag_4_value()
 * @method $this setTag_5_value($tag_5_value)
 * @method string getTag_5_value()
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
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
 * @method $this setTag_1_key($tag_1_key)
 * @method string getTag_1_key()
 * @method $this setTag_2_key($tag_2_key)
 * @method string getTag_2_key()
 * @method $this setTag_3_key($tag_3_key)
 * @method string getTag_3_key()
 * @method $this setTag_4_key($tag_4_key)
 * @method string getTag_4_key()
 * @method $this setTag_5_key($tag_5_key)
 * @method string getTag_5_key()
 * @method $this setTag_1_value($tag_1_value)
 * @method string getTag_1_value()
 * @method $this setTag_2_value($tag_2_value)
 * @method string getTag_2_value()
 * @method $this setTag_3_value($tag_3_value)
 * @method string getTag_3_value()
 * @method $this setTag_4_value($tag_4_value)
 * @method string getTag_4_value()
 * @method $this setTag_5_value($tag_5_value)
 * @method string getTag_5_value()
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
 * @method $this setInstanceChargeType($instanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
class DescribeBackups extends Request
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
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setPayType($payType)
 * @method string getPayType()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
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
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setExpired($expired)
 * @method string getExpired()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
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
 * @method $this setTag_1_key($tag_1_key)
 * @method string getTag_1_key()
 * @method $this setTag_2_key($tag_2_key)
 * @method string getTag_2_key()
 * @method $this setTag_3_key($tag_3_key)
 * @method string getTag_3_key()
 * @method $this setTag_4_key($tag_4_key)
 * @method string getTag_4_key()
 * @method $this setTag_5_key($tag_5_key)
 * @method string getTag_5_key()
 * @method $this setTag_1_value($tag_1_value)
 * @method string getTag_1_value()
 * @method $this setTag_2_value($tag_2_value)
 * @method string getTag_2_value()
 * @method $this setTag_3_value($tag_3_value)
 * @method string getTag_3_value()
 * @method $this setTag_4_value($tag_4_value)
 * @method string getTag_4_value()
 * @method $this setTag_5_value($tag_5_value)
 * @method string getTag_5_value()
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
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
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
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
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
 * @method $this setInstanceChargeType($instanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 */
class DescribeBackupDatabase extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class CloneDBInstance extends Request
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
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setDBInstanceStorageType($dBInstanceStorageType)
 * @method string getDBInstanceStorageType()
 * @method $this setTunnelId($tunnelId)
 * @method string getTunnelId()
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
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
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
 * @method $this setSQLCollectorStatus($sQLCollectorStatus)
 * @method string getSQLCollectorStatus()
 * @method $this setStoragePeriod($storagePeriod)
 * @method int getStoragePeriod()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifySQLCollectorPolicy extends Request
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