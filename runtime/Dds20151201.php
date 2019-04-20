<?php

namespace aliyun\sdk\services\Dds20151201;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20151201
 *
 * @package aliyun\sdk\services\Dds20151201
 * @method RestartDBInstance RestartDBInstance()
 * @method DescribeAvaliableTimeRange DescribeAvaliableTimeRange()
 * @method DescribeDBInstanceSSL DescribeDBInstanceSSL()
 * @method ReleaseReplica ReleaseReplica()
 * @method ModifyReplicaMode ModifyReplicaMode()
 * @method DescribeUserInfo DescribeUserInfo()
 * @method ModifyDBInstanceConnectionString ModifyDBInstanceConnectionString()
 * @method CreateRecommendationTask CreateRecommendationTask()
 * @method SwitchDBInstanceHA SwitchDBInstanceHA()
 * @method DescribeShardingAvailability DescribeShardingAvailability()
 * @method UntagResources UntagResources()
 * @method DescribeBackupDBs DescribeBackupDBs()
 * @method DescribeActiveOperationTaskType DescribeActiveOperationTaskType()
 * @method DescribeDBInstances DescribeDBInstances()
 * @method DescribeAccounts DescribeAccounts()
 * @method DescribeReplicaInitializeProgress DescribeReplicaInitializeProgress()
 * @method ModifyDBInstanceDescription ModifyDBInstanceDescription()
 * @method ModifyReplicaVerificationMode ModifyReplicaVerificationMode()
 * @method DescribeActiveOperationTask DescribeActiveOperationTask()
 * @method ModifyReplicaDescription ModifyReplicaDescription()
 * @method DescribeDBInstanceMonitor DescribeDBInstanceMonitor()
 * @method DescribeBackupPolicy DescribeBackupPolicy()
 * @method UpgradeDBInstanceEngineVersion UpgradeDBInstanceEngineVersion()
 * @method DescribeSecurityIps DescribeSecurityIps()
 * @method CreateShardingDBInstance CreateShardingDBInstance()
 * @method DescribeReplicaSetRole DescribeReplicaSetRole()
 * @method ModifyDBInstanceMonitor ModifyDBInstanceMonitor()
 * @method ModifyDBInstanceNetExpireTime ModifyDBInstanceNetExpireTime()
 * @method ResetAccountPassword ResetAccountPassword()
 * @method CreateBackup CreateBackup()
 * @method UpgradeDBInstanceKernelVersion UpgradeDBInstanceKernelVersion()
 * @method ModifyDBInstanceNetworkType ModifyDBInstanceNetworkType()
 * @method CreateShardingDBInstances CreateShardingDBInstances()
 * @method DescribeReplicaUsage DescribeReplicaUsage()
 * @method DescribeActiveOperationTaskRegion DescribeActiveOperationTaskRegion()
 * @method DescribeParameterModificationHistory DescribeParameterModificationHistory()
 * @method DescribePrice DescribePrice()
 * @method LockDBInstance LockDBInstance()
 * @method EvaluateFailOverSwitch EvaluateFailOverSwitch()
 * @method DescribeAvailableEngineVersion DescribeAvailableEngineVersion()
 * @method DescribeAuditLogFilter DescribeAuditLogFilter()
 * @method ModifyActiveOperationTask ModifyActiveOperationTask()
 * @method DescribeBackups DescribeBackups()
 * @method DescribeAvailableTimeRange DescribeAvailableTimeRange()
 * @method DescribeVerificationList DescribeVerificationList()
 * @method CreateAccount CreateAccount()
 * @method RestoreDBInstance RestoreDBInstance()
 * @method DescribeRdsVpcs DescribeRdsVpcs()
 * @method DescribeStaticVerificationList DescribeStaticVerificationList()
 * @method ModifyInstanceAutoRenewalAttribute ModifyInstanceAutoRenewalAttribute()
 * @method UnlockDBInstance UnlockDBInstance()
 * @method ModifySecurityIps ModifySecurityIps()
 * @method DescribeRunningLogRecords DescribeRunningLogRecords()
 * @method CreateNode CreateNode()
 * @method MigrateToOtherZone MigrateToOtherZone()
 * @method ModifyAuditLogFilter ModifyAuditLogFilter()
 * @method DescribeRdsVSwitchs DescribeRdsVSwitchs()
 * @method DescribeShardingNetworkAddress DescribeShardingNetworkAddress()
 * @method DescribeDBInstanceAttribute DescribeDBInstanceAttribute()
 * @method ReleasePublicNetworkAddress ReleasePublicNetworkAddress()
 * @method DescribeIndexRecommendation DescribeIndexRecommendation()
 * @method ModifyReplicaRecoveryMode ModifyReplicaRecoveryMode()
 * @method CreateStaticVerification CreateStaticVerification()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeReplicationGroup DescribeReplicationGroup()
 * @method DescribeInstanceAutoRenewalAttribute DescribeInstanceAutoRenewalAttribute()
 * @method DescribeSlowLogRecords DescribeSlowLogRecords()
 * @method DescribeActiveOperationTaskCount DescribeActiveOperationTaskCount()
 * @method DeleteDBInstance DeleteDBInstance()
 * @method ModifyAccountDescription ModifyAccountDescription()
 * @method SwithcDBInstanceHA SwithcDBInstanceHA()
 * @method ModifyNodeSpec ModifyNodeSpec()
 * @method AllocatePublicNetworkAddress AllocatePublicNetworkAddress()
 * @method ModifyAuditPolicy ModifyAuditPolicy()
 * @method CreateDBInstances CreateDBInstances()
 * @method CreateDBInstanceReplica CreateDBInstanceReplica()
 * @method DescribeAuditFiles DescribeAuditFiles()
 * @method DescribeParameters DescribeParameters()
 * @method ModifyReplicaRelation ModifyReplicaRelation()
 * @method ModifyParameters ModifyParameters()
 * @method DescribeAuditRecords DescribeAuditRecords()
 * @method TagResources TagResources()
 * @method DescribeDBInstancePerformance DescribeDBInstancePerformance()
 * @method DescribeReplicaConflictInfo DescribeReplicaConflictInfo()
 * @method DescribeErrorLogRecords DescribeErrorLogRecords()
 * @method Sample Sample()
 * @method DescribeRenewalPrice DescribeRenewalPrice()
 * @method DestroyInstance DestroyInstance()
 * @method ModifyDBInstanceMaintainTime ModifyDBInstanceMaintainTime()
 * @method DescribeQualifications DescribeQualifications()
 * @method DescribeAuditPolicy DescribeAuditPolicy()
 * @method TransformToPrePaid TransformToPrePaid()
 * @method DescribeStrategy DescribeStrategy()
 * @method ModifyDBInstanceSpec ModifyDBInstanceSpec()
 * @method DescribeCommodity DescribeCommodity()
 * @method DescribeKernelReleaseNotes DescribeKernelReleaseNotes()
 * @method ModifyBackupPolicy ModifyBackupPolicy()
 * @method ModifyGuardDomainMode ModifyGuardDomainMode()
 * @method DescribeParameterTemplates DescribeParameterTemplates()
 * @method CheckRecoveryCondition CheckRecoveryCondition()
 * @method RenewDBInstance RenewDBInstance()
 * @method DescribeReplicaPerformance DescribeReplicaPerformance()
 * @method ModifyDBInstanceSSL ModifyDBInstanceSSL()
 * @method DescribeReplicas DescribeReplicas()
 * @method CreateDBInstance CreateDBInstance()
 * @method DeleteNode DeleteNode()
 * @method StartArchiveSQLLog StartArchiveSQLLog()
 * @method ListTagResources ListTagResources()
 */
class V20151201
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
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class DescribeAvaliableTimeRange extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setCurrentConnectionString($currentConnectionString)
 * @method string getCurrentConnectionString()
 * @method $this setNewConnectionString($newConnectionString)
 * @method string getNewConnectionString()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class CreateRecommendationTask extends Request
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
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setSwitchType($switchType)
 * @method int getSwitchType()
 * @method $this setTargetInstanceId($targetInstanceId)
 * @method int getTargetInstanceId()
 * @method $this setSourceInstanceId($sourceInstanceId)
 * @method int getSourceInstanceId()
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
 * @method $this setEvaluateType($evaluateType)
 * @method string getEvaluateType()
 * @method $this setMongos($mongos)
 * @method array getMongos()
 * @method $this setReplicaSet($replicaSet)
 * @method array getReplicaSet()
 * @method $this setConfigServer($configServer)
 * @method array getConfigServer()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setNodeClass($nodeClass)
 * @method string getNodeClass()
 * @method $this setNodeStorage($nodeStorage)
 * @method int getNodeStorage()
 */
class DescribeShardingAvailability extends Request
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
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSourceDBInstance($sourceDBInstance)
 * @method string getSourceDBInstance()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 */
class DescribeBackupDBs extends Request
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
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setReplicationFactor($replicationFactor)
 * @method string getReplicationFactor()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 * @method $this setDBInstanceStatus($dBInstanceStatus)
 * @method string getDBInstanceStatus()
 * @method $this setDBInstanceType($dBInstanceType)
 * @method string getDBInstanceType()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setNetworkType($networkType)
 * @method string getNetworkType()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setExpired($expired)
 * @method string getExpired()
 * @method $this setTag($tag)
 * @method array getTag()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeSecurityIps extends Request
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
 * @method $this setMongos($mongos)
 * @method array getMongos()
 * @method $this setReplicaSet($replicaSet)
 * @method array getReplicaSet()
 * @method $this setConfigServer($configServer)
 * @method array getConfigServer()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setNetworkType($networkType)
 * @method string getNetworkType()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setSrcDBInstanceId($srcDBInstanceId)
 * @method string getSrcDBInstanceId()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setStorageEngine($storageEngine)
 * @method string getStorageEngine()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 */
class CreateShardingDBInstance extends Request
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
class DescribeReplicaSetRole extends Request
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
 * @method $this setGranularity($granularity)
 * @method string getGranularity()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionString($connectionString)
 * @method string getConnectionString()
 * @method $this setClassicExpendExpiredDays($classicExpendExpiredDays)
 * @method int getClassicExpendExpiredDays()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupMethod($backupMethod)
 * @method string getBackupMethod()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNetworkType($networkType)
 * @method string getNetworkType()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setRetainClassic($retainClassic)
 * @method string getRetainClassic()
 * @method $this setClassicExpiredDays($classicExpiredDays)
 * @method int getClassicExpiredDays()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstances($dBInstances)
 * @method string getDBInstances()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setRebuildInstance($rebuildInstance)
 * @method bool getRebuildInstance()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 */
class CreateShardingDBInstances extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeParameterModificationHistory extends Request
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
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setDBInstances($dBInstances)
 * @method string getDBInstances()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setOrderParamOut($orderParamOut)
 * @method string getOrderParamOut()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setLockReason($lockReason)
 * @method string getLockReason()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeAvailableEngineVersion extends Request
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
 * @method $this setRoleType($roleType)
 * @method string getRoleType()
 */
class DescribeAuditLogFilter extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class DescribeAvailableTimeRange extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setAccountDescription($accountDescription)
 * @method string getAccountDescription()
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
 * @method $this setBackupId($backupId)
 * @method int getBackupId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSecurityIps($securityIps)
 * @method string getSecurityIps()
 * @method $this setModifyMode($modifyMode)
 * @method string getModifyMode()
 * @method $this setSecurityIpGroupName($securityIpGroupName)
 * @method string getSecurityIpGroupName()
 * @method $this setSecurityIpGroupAttribute($securityIpGroupAttribute)
 * @method string getSecurityIpGroupAttribute()
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
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setSQLId($sQLId)
 * @method int getSQLId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setRoleType($roleType)
 * @method string getRoleType()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeRunningLogRecords extends Request
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
 * @method $this setNodeClass($nodeClass)
 * @method string getNodeClass()
 * @method $this setNodeStorage($nodeStorage)
 * @method int getNodeStorage()
 * @method $this setNodeType($nodeType)
 * @method string getNodeType()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setFromApp($fromApp)
 * @method string getFromApp()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 */
class CreateNode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setEffectiveTime($effectiveTime)
 * @method string getEffectiveTime()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setFilter($filter)
 * @method string getFilter()
 * @method $this setRoleType($roleType)
 * @method string getRoleType()
 */
class ModifyAuditLogFilter extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class DescribeShardingNetworkAddress extends Request
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
 * @method $this setEngine($engine)
 * @method string getEngine()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class ReleasePublicNetworkAddress extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setDatabase($database)
 * @method string getDatabase()
 * @method $this setCollection($collection)
 * @method string getCollection()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setOperationType($operationType)
 * @method string getOperationType()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeIndexRecommendation extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setReplicationGroupId($replicationGroupId)
 * @method string getReplicationGroupId()
 * @method $this setSourceInstanceId($sourceInstanceId)
 * @method string getSourceInstanceId()
 * @method $this setDestinationInstanceIds($destinationInstanceIds)
 * @method string getDestinationInstanceIds()
 */
class DescribeReplicationGroup extends Request
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
 * @method $this setDBInstanceType($dBInstanceType)
 * @method string getDBInstanceType()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setSQLId($sQLId)
 * @method int getSQLId()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setSwitchType($switchType)
 * @method int getSwitchType()
 * @method $this setTargetInstanceId($targetInstanceId)
 * @method int getTargetInstanceId()
 * @method $this setSourceInstanceId($sourceInstanceId)
 * @method int getSourceInstanceId()
 */
class SwithcDBInstanceHA extends Request
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
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setNodeClass($nodeClass)
 * @method string getNodeClass()
 * @method $this setNodeStorage($nodeStorage)
 * @method int getNodeStorage()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setFromApp($fromApp)
 * @method string getFromApp()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setEffectiveTime($effectiveTime)
 * @method string getEffectiveTime()
 */
class ModifyNodeSpec extends Request
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
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class AllocatePublicNetworkAddress extends Request
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
 * @method $this setAuditStatus($auditStatus)
 * @method string getAuditStatus()
 * @method $this setStoragePeriod($storagePeriod)
 * @method int getStoragePeriod()
 */
class ModifyAuditPolicy extends Request
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
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setDBInstances($dBInstances)
 * @method string getDBInstances()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 * @method $this setRebuildInstance($rebuildInstance)
 * @method bool getRebuildInstance()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 */
class CreateDBInstances extends Request
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
 * @method $this setSourceDBInstanceId($sourceDBInstanceId)
 * @method string getSourceDBInstanceId()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setReplicaDescription($replicaDescription)
 * @method string getReplicaDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setNetworkType($networkType)
 * @method string getNetworkType()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
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
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeAuditFiles extends Request
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
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setParameters($parameters)
 * @method string getParameters()
 */
class ModifyParameters extends Request
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
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDatabase($database)
 * @method string getDatabase()
 * @method $this setUser($user)
 * @method string getUser()
 * @method $this setForm($form)
 * @method string getForm()
 * @method $this setQueryKeywords($queryKeywords)
 * @method string getQueryKeywords()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeAuditRecords extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setRoleId($roleId)
 * @method string getRoleId()
 * @method $this setReplicaSetRole($replicaSetRole)
 * @method string getReplicaSetRole()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setSQLId($sQLId)
 * @method int getSQLId()
 * @method $this setRoleType($roleType)
 * @method string getRoleType()
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
 */
class DescribeErrorLogRecords extends Request
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
class Sample extends Request
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
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class DestroyInstance extends Request
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
 * @method $this setMaintainStartTime($maintainStartTime)
 * @method string getMaintainStartTime()
 * @method $this setMaintainEndTime($maintainEndTime)
 * @method string getMaintainEndTime()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOperation($operation)
 * @method string getOperation()
 */
class DescribeQualifications extends Request
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
class DescribeAuditPolicy extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setFromApp($fromApp)
 * @method string getFromApp()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 */
class TransformToPrePaid extends Request
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method string getDBInstanceStorage()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setReplicationFactor($replicationFactor)
 * @method string getReplicationFactor()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setEffectiveTime($effectiveTime)
 * @method string getEffectiveTime()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
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
 * @method $this setKernelVersion($kernelVersion)
 * @method string getKernelVersion()
 */
class DescribeKernelReleaseNotes extends Request
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
 * @method $this setPreferredBackupTime($preferredBackupTime)
 * @method string getPreferredBackupTime()
 * @method $this setPreferredBackupPeriod($preferredBackupPeriod)
 * @method string getPreferredBackupPeriod()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
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
 * @method $this setSourceDBInstance($sourceDBInstance)
 * @method string getSourceDBInstance()
 * @method $this setDatabaseNames($databaseNames)
 * @method string getDatabaseNames()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 */
class CheckRecoveryCondition extends Request
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
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSSLAction($sSLAction)
 * @method string getSSLAction()
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
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setNetworkType($networkType)
 * @method string getNetworkType()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setSrcDBInstanceId($srcDBInstanceId)
 * @method string getSrcDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($restoreTime)
 * @method string getRestoreTime()
 * @method $this setBusinessInfo($businessInfo)
 * @method string getBusinessInfo()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 * @method $this setDatabaseNames($databaseNames)
 * @method string getDatabaseNames()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setStorageEngine($storageEngine)
 * @method string getStorageEngine()
 * @method $this setReplicationFactor($replicationFactor)
 * @method string getReplicationFactor()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
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
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class DeleteNode extends Request
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
 */
class StartArchiveSQLLog extends Request
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

}