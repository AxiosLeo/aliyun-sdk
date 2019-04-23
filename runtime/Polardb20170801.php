<?php

namespace aliyun\sdk\services\Polardb20170801;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170801
 *
 * @package aliyun\sdk\services\Polardb20170801
 * @method DescribeSQLCollectorVersion DescribeSQLCollectorVersion()
 * @method RestartDBInstance RestartDBInstance()
 * @method ModifyParameter ModifyParameter()
 * @method DescribeSlowLogs DescribeSlowLogs()
 * @method ReleaseClusterPublicConnection ReleaseClusterPublicConnection()
 * @method ModifyDBInstanceConnectionString ModifyDBInstanceConnectionString()
 * @method ModifyDBClusterEndpoint ModifyDBClusterEndpoint()
 * @method DeleteDBEndpointAddress DeleteDBEndpointAddress()
 * @method FailoverDBCluster FailoverDBCluster()
 * @method CheckConnectionString CheckConnectionString()
 * @method DescribeResourceUsage DescribeResourceUsage()
 * @method UntagResources UntagResources()
 * @method CheckSqlLogHistoryEnable CheckSqlLogHistoryEnable()
 * @method DescribeSQLExplorerVersion DescribeSQLExplorerVersion()
 * @method RestartDBNode RestartDBNode()
 * @method GrantAccountPrivilege GrantAccountPrivilege()
 * @method DescribeActiveOperationTaskType DescribeActiveOperationTaskType()
 * @method DescribeOssBuckets DescribeOssBuckets()
 * @method DescribeDBInstances DescribeDBInstances()
 * @method DescribeAccounts DescribeAccounts()
 * @method ModifyDBInstanceDescription ModifyDBInstanceDescription()
 * @method DeleteDBCluster DeleteDBCluster()
 * @method DescribeTemplateSqlDetail DescribeTemplateSqlDetail()
 * @method CreateDatabase CreateDatabase()
 * @method DescribeActiveOperationTask DescribeActiveOperationTask()
 * @method ModifyDBClusterConnectionString ModifyDBClusterConnectionString()
 * @method StartSqlLogDump StartSqlLogDump()
 * @method DescribeBackupPolicy DescribeBackupPolicy()
 * @method DescribeClusterNetInfo DescribeClusterNetInfo()
 * @method DeleteDBClusterEndpoint DeleteDBClusterEndpoint()
 * @method ModifyDBEndpointAddress ModifyDBEndpointAddress()
 * @method DeleteDatabase DeleteDatabase()
 * @method ModifyAccountPassword ModifyAccountPassword()
 * @method ReleaseInstancePublicConnection ReleaseInstancePublicConnection()
 * @method ResetAccountPassword ResetAccountPassword()
 * @method CheckAccountName CheckAccountName()
 * @method CreateBackup CreateBackup()
 * @method UpgradeDBClusterMinorVersion UpgradeDBClusterMinorVersion()
 * @method ReleaseMPPConnection ReleaseMPPConnection()
 * @method AllocateClusterPublicConnection AllocateClusterPublicConnection()
 * @method DescribeDBClusterInfo DescribeDBClusterInfo()
 * @method DescribeActiveOperationTaskRegion DescribeActiveOperationTaskRegion()
 * @method DescribeDBClusterEndpoints DescribeDBClusterEndpoints()
 * @method DescribeSQLCollectorPolicy DescribeSQLCollectorPolicy()
 * @method DescribeSQLCollectorRetention DescribeSQLCollectorRetention()
 * @method ModifyDBClusterDescription ModifyDBClusterDescription()
 * @method DescribeSqlLogDumpStatus DescribeSqlLogDumpStatus()
 * @method DescribeSQLExplorerRetention DescribeSQLExplorerRetention()
 * @method AllocateReadWriteSplittingConnection AllocateReadWriteSplittingConnection()
 * @method DescribeBackupTasks DescribeBackupTasks()
 * @method DescribeErrorLogs DescribeErrorLogs()
 * @method DescribeDBNodePerformance DescribeDBNodePerformance()
 * @method CreateDBClusterEndpoint CreateDBClusterEndpoint()
 * @method ModifyActiveOperationTask ModifyActiveOperationTask()
 * @method DescribeBackups DescribeBackups()
 * @method DeleteAccount DeleteAccount()
 * @method ReleaseReadWriteSplittingConnection ReleaseReadWriteSplittingConnection()
 * @method CreateAccount CreateAccount()
 * @method DescribeSQLLogRecordsList DescribeSQLLogRecordsList()
 * @method ModifySecurityIps ModifySecurityIps()
 * @method DescribeSQLLogRecords DescribeSQLLogRecords()
 * @method StartSqlLogTrail StartSqlLogTrail()
 * @method DescribeDBClusterAttribute DescribeDBClusterAttribute()
 * @method CreateDBEndpointAddress CreateDBEndpointAddress()
 * @method DescribeDBInstanceNetInfo DescribeDBInstanceNetInfo()
 * @method ResetAccount ResetAccount()
 * @method DescribeDBInstanceAttribute DescribeDBInstanceAttribute()
 * @method DescribeDBClusterPerformance DescribeDBClusterPerformance()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeTasks DescribeTasks()
 * @method DescribeSlowLogRecords DescribeSlowLogRecords()
 * @method DescribeActiveOperationTaskCount DescribeActiveOperationTaskCount()
 * @method DescribeDBClusterAccessWhitelist DescribeDBClusterAccessWhitelist()
 * @method ModifyAccountDescription ModifyAccountDescription()
 * @method DescribeSQLExplorerPolicy DescribeSQLExplorerPolicy()
 * @method AllocateMPPConnection AllocateMPPConnection()
 * @method DescribeSqlLogDetailArchiveStatus DescribeSqlLogDetailArchiveStatus()
 * @method ModifyDBDescription ModifyDBDescription()
 * @method QueryOssBuckets QueryOssBuckets()
 * @method ModifySQLExplorerPolicy ModifySQLExplorerPolicy()
 * @method DescribeSQLLogTemplates DescribeSQLLogTemplates()
 * @method DescribeParameters DescribeParameters()
 * @method RevokeAccountPrivilege RevokeAccountPrivilege()
 * @method ModifyDBClusterMaintainTime ModifyDBClusterMaintainTime()
 * @method DescribeDBClusterParameters DescribeDBClusterParameters()
 * @method DeleteBackup DeleteBackup()
 * @method TagResources TagResources()
 * @method CheckDBName CheckDBName()
 * @method DescribeDBInstancePerformance DescribeDBInstancePerformance()
 * @method DescribeSqlTemplatesConsumeAndScanRows DescribeSqlTemplatesConsumeAndScanRows()
 * @method CreateDBCluster CreateDBCluster()
 * @method ModifySQLCollectorRetention ModifySQLCollectorRetention()
 * @method ModifyDBInstanceMaintainTime ModifyDBInstanceMaintainTime()
 * @method AllocateInstancePrivateConnection AllocateInstancePrivateConnection()
 * @method DescribeTaskInfo DescribeTaskInfo()
 * @method DescribeCharacterSetName DescribeCharacterSetName()
 * @method DescribeDatabases DescribeDatabases()
 * @method DeleteDBNodes DeleteDBNodes()
 * @method CreateDBNodes CreateDBNodes()
 * @method DescribeSqlLogTimeDistribution DescribeSqlLogTimeDistribution()
 * @method AllocateInstancePublicConnection AllocateInstancePublicConnection()
 * @method DescribeDBInstanceIPArrayList DescribeDBInstanceIPArrayList()
 * @method ModifyBackupPolicy ModifyBackupPolicy()
 * @method DescribeSqlLogTemplatesTimeDistribution DescribeSqlLogTemplatesTimeDistribution()
 * @method ModifyDBClusterParameters ModifyDBClusterParameters()
 * @method DescribeParameterTemplates DescribeParameterTemplates()
 * @method CheckMPPCondition CheckMPPCondition()
 * @method LoginDBInstancefromCloudDBA LoginDBInstancefromCloudDBA()
 * @method ModifySQLExplorerRetention ModifySQLExplorerRetention()
 * @method DescribeDBClusters DescribeDBClusters()
 * @method DescribeCloudDBAService DescribeCloudDBAService()
 * @method DescribeDBClusterIPArrayList DescribeDBClusterIPArrayList()
 * @method CreateDBInstance CreateDBInstance()
 * @method DescribeSqlLogTemplatesList DescribeSqlLogTemplatesList()
 * @method StartSqlLogDetailArchive StartSqlLogDetailArchive()
 * @method ListTagResources ListTagResources()
 * @method DescribeDBClusterNetInfo DescribeDBClusterNetInfo()
 * @method ModifyDBClusterAccessWhitelist ModifyDBClusterAccessWhitelist()
 * @method DescribeSQLLogFiles DescribeSQLLogFiles()
 * @method DescribeMPPCondition DescribeMPPCondition()
 * @method ModifySQLCollectorPolicy ModifySQLCollectorPolicy()
 */
class V20170801
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setParameters($parameters)
 * @method string getParameters()
 * @method $this setForcerestart($forcerestart)
 * @method bool getForcerestart()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBNodeId($dBNodeId)
 * @method string getDBNodeId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setCurrentConnectionString($currentConnectionString)
 * @method string getCurrentConnectionString()
 */
class ReleaseClusterPublicConnection extends Request
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
 * @method $this setCurrentConnectionString($currentConnectionString)
 * @method string getCurrentConnectionString()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBEndpointId($dBEndpointId)
 * @method string getDBEndpointId()
 * @method $this setNodes($nodes)
 * @method string getNodes()
 * @method $this setEndpointConfig($endpointConfig)
 * @method string getEndpointConfig()
 */
class ModifyDBClusterEndpoint extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBEndpointId($dBEndpointId)
 * @method string getDBEndpointId()
 * @method $this setNetType($netType)
 * @method string getNetType()
 */
class DeleteDBEndpointAddress extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setTargetDBNodeId($targetDBNodeId)
 * @method string getTargetDBNodeId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class FailoverDBCluster extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 */
class CheckConnectionString extends Request
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
class DescribeResourceUsage extends Request
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
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTagKey($tagKey)
 * @method array getTagKey()
 * @method $this setAll($all)
 * @method bool getAll()
 */
class UntagResources extends Request
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
class DescribeSQLExplorerVersion extends Request
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
 * @method $this setDBNodeId($dBNodeId)
 * @method string getDBNodeId()
 */
class RestartDBNode extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeOssBuckets extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 */
class DeleteDBCluster extends Request
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
 * @method $this setChildDBInstanceIDs($childDBInstanceIDs)
 * @method string getChildDBInstanceIDs()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setCurrentConnectionString($currentConnectionString)
 * @method string getCurrentConnectionString()
 */
class ModifyDBClusterConnectionString extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
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
class DescribeClusterNetInfo extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBEndpointId($dBEndpointId)
 * @method string getDBEndpointId()
 */
class DeleteDBClusterEndpoint extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBEndpointId($dBEndpointId)
 * @method string getDBEndpointId()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 */
class ModifyDBEndpointAddress extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setNewAccountPassword($newAccountPassword)
 * @method string getNewAccountPassword()
 */
class ModifyAccountPassword extends Request
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
 * @method $this setCurrentConnectionString($currentConnectionString)
 * @method string getCurrentConnectionString()
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 */
class CheckAccountName extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 */
class UpgradeDBClusterMinorVersion extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setCurrentConnectionString($currentConnectionString)
 * @method string getCurrentConnectionString()
 */
class ReleaseMPPConnection extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 */
class AllocateClusterPublicConnection extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 */
class DescribeDBClusterInfo extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBEndpointId($dBEndpointId)
 * @method string getDBEndpointId()
 */
class DescribeDBClusterEndpoints extends Request
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
class DescribeSQLCollectorPolicy extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBClusterDescription($dBClusterDescription)
 * @method string getDBClusterDescription()
 */
class ModifyDBClusterDescription extends Request
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
class DescribeSQLExplorerRetention extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setNetType($netType)
 * @method string getNetType()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setBackupJobId($backupJobId)
 * @method string getBackupJobId()
 * @method $this setBackupMode($backupMode)
 * @method string getBackupMode()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBNodeId($dBNodeId)
 * @method string getDBNodeId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
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
 * @method $this setDBNodeId($dBNodeId)
 * @method string getDBNodeId()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDBNodePerformance extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setEndpointType($endpointType)
 * @method string getEndpointType()
 * @method $this setNodes($nodes)
 * @method string getNodes()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class CreateDBClusterEndpoint extends Request
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
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setCurrentConnectionString($currentConnectionString)
 * @method string getCurrentConnectionString()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setAccountType($accountType)
 * @method string getAccountType()
 * @method $this setAccountDescription($accountDescription)
 * @method string getAccountDescription()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setAccountPrivilege($accountPrivilege)
 * @method string getAccountPrivilege()
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
 * @method $this setChildDBInstanceIDs($childDBInstanceIDs)
 * @method string getChildDBInstanceIDs()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setSecurityIps($securityIps)
 * @method string getSecurityIps()
 * @method $this setDBClusterIPArrayName($dBClusterIPArrayName)
 * @method string getDBClusterIPArrayName()
 * @method $this setDBClusterIPArrayAttribute($dBClusterIPArrayAttribute)
 * @method string getDBClusterIPArrayAttribute()
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
 * @method $this setChildDBInstanceIDs($childDBInstanceIDs)
 * @method string getChildDBInstanceIDs()
 * @method $this setJobId($jobId)
 * @method string getJobId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 */
class DescribeDBClusterAttribute extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBEndpointId($dBEndpointId)
 * @method string getDBEndpointId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setNetType($netType)
 * @method string getNetType()
 */
class CreateDBEndpointAddress extends Request
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
class DescribeDBInstanceNetInfo extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDBClusterPerformance extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBNodeId($dBNodeId)
 * @method string getDBNodeId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBNodeId($dBNodeId)
 * @method string getDBNodeId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 */
class DescribeDBClusterAccessWhitelist extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountDescription($accountDescription)
 * @method string getAccountDescription()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeSQLExplorerPolicy extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setNetType($netType)
 * @method string getNetType()
 */
class AllocateMPPConnection extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setDBDescription($dBDescription)
 * @method string getDBDescription()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSQLCollectorStatus($sQLCollectorStatus)
 * @method string getSQLCollectorStatus()
 */
class ModifySQLExplorerPolicy extends Request
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
 * @method $this setChildDBInstanceIDs($childDBInstanceIDs)
 * @method string getChildDBInstanceIDs()
 */
class DescribeSQLLogTemplates extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setDBName($dBName)
 * @method string getDBName()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setMaintainTime($maintainTime)
 * @method string getMaintainTime()
 */
class ModifyDBClusterMaintainTime extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 */
class DescribeDBClusterParameters extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTag($tag)
 * @method array getTag()
 */
class TagResources extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 */
class CheckDBName extends Request
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
 * @method $this setChildDBInstanceIDs($childDBInstanceIDs)
 * @method string getChildDBInstanceIDs()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setDBType($dBType)
 * @method string getDBType()
 * @method $this setDBVersion($dBVersion)
 * @method string getDBVersion()
 * @method $this setDBNodeClass($dBNodeClass)
 * @method string getDBNodeClass()
 * @method $this setClusterNetworkType($clusterNetworkType)
 * @method string getClusterNetworkType()
 * @method $this setDBClusterDescription($dBClusterDescription)
 * @method string getDBClusterDescription()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class CreateDBCluster extends Request
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
 * @method $this setMaintainTime($maintainTime)
 * @method string getMaintainTime()
 */
class ModifyDBInstanceMaintainTime extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
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
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBNodeId($dBNodeId)
 * @method array getDBNodeId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class DeleteDBNodes extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBNode($dBNode)
 * @method array getDBNode()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class CreateDBNodes extends Request
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
 * @method $this setChildDBInstanceIDs($childDBInstanceIDs)
 * @method string getChildDBInstanceIDs()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 */
class AllocateInstancePublicConnection extends Request
{

}/**
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setPreferredBackupTime($preferredBackupTime)
 * @method string getPreferredBackupTime()
 * @method $this setPreferredBackupPeriod($preferredBackupPeriod)
 * @method string getPreferredBackupPeriod()
 * @method $this setBackupRetentionPeriod($backupRetentionPeriod)
 * @method string getBackupRetentionPeriod()
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
 * @method $this setChildDBInstanceIDs($childDBInstanceIDs)
 * @method string getChildDBInstanceIDs()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setParameters($parameters)
 * @method string getParameters()
 * @method $this setEffectiveTime($effectiveTime)
 * @method string getEffectiveTime()
 */
class ModifyDBClusterParameters extends Request
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
class DescribeParameterTemplates extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 */
class CheckMPPCondition extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConfigValue($configValue)
 * @method string getConfigValue()
 */
class ModifySQLExplorerRetention extends Request
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
 * @method $this setDBClusterIds($dBClusterIds)
 * @method string getDBClusterIds()
 * @method $this setDBClusterDescription($dBClusterDescription)
 * @method string getDBClusterDescription()
 * @method $this setDBClusterStatus($dBClusterStatus)
 * @method string getDBClusterStatus()
 * @method $this setDBType($dBType)
 * @method string getDBType()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeDBClusters extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 */
class DescribeDBClusterIPArrayList extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
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
 * @method $this setChildDBInstanceIDs($childDBInstanceIDs)
 * @method string getChildDBInstanceIDs()
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
 * @method $this setChildDBInstanceIDs($childDBInstanceIDs)
 * @method string getChildDBInstanceIDs()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setNextToken($nextToken)
 * @method string getNextToken()
 */
class ListTagResources extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setConnectionStringType($connectionStringType)
 * @method string getConnectionStringType()
 */
class DescribeDBClusterNetInfo extends Request
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
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 * @method $this setSecurityIps($securityIps)
 * @method string getSecurityIps()
 * @method $this setDBClusterIPArrayName($dBClusterIPArrayName)
 * @method string getDBClusterIPArrayName()
 * @method $this setDBClusterIPArrayAttribute($dBClusterIPArrayAttribute)
 * @method string getDBClusterIPArrayAttribute()
 */
class ModifyDBClusterAccessWhitelist extends Request
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
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDBClusterId($dBClusterId)
 * @method string getDBClusterId()
 */
class DescribeMPPCondition extends Request
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
 * @method $this setSQLCollectorStatus($sQLCollectorStatus)
 * @method string getSQLCollectorStatus()
 */
class ModifySQLCollectorPolicy extends Request
{

}