<?php

namespace aliyun\sdk\services\Rds20130528;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20130528
 *
 * @package aliyun\sdk\services\Rds20130528
 * @method ModifyDBInstanceAttribute ModifyDBInstanceAttribute()
 * @method RestartDBInstance RestartDBInstance()
 * @method ModifyParameter ModifyParameter()
 * @method DescribeSlowLogs DescribeSlowLogs()
 * @method DescribeResourceUsage DescribeResourceUsage()
 * @method GrantAccountPrivilege GrantAccountPrivilege()
 * @method DescribeDBInstances DescribeDBInstances()
 * @method ModifyAccountAttribute ModifyAccountAttribute()
 * @method DescribeAccounts DescribeAccounts()
 * @method CreateDatabase CreateDatabase()
 * @method MigratingDB MigratingDB()
 * @method DescribeSecurityIps DescribeSecurityIps()
 * @method DeleteDatabase DeleteDatabase()
 * @method DescribeBinlogFiles DescribeBinlogFiles()
 * @method CreateChildDBInstance CreateChildDBInstance()
 * @method CreateBackup CreateBackup()
 * @method DescribeDataFiles DescribeDataFiles()
 * @method CreateGuardDBInstance CreateGuardDBInstance()
 * @method DeleteChildInstance DeleteChildInstance()
 * @method DescribeErrorLogs DescribeErrorLogs()
 * @method DescribeBackups DescribeBackups()
 * @method DeleteAccount DeleteAccount()
 * @method CreateAccount CreateAccount()
 * @method RestoreDBInstance RestoreDBInstance()
 * @method ModifySecurityIps ModifySecurityIps()
 * @method DescribeSQLLogRecords DescribeSQLLogRecords()
 * @method DescribeSQLLogReports DescribeSQLLogReports()
 * @method SwitchDBInstance SwitchDBInstance()
 * @method DescribeSlowLogRecords DescribeSlowLogRecords()
 * @method CreateImportDataUpload CreateImportDataUpload()
 * @method DeleteDBInstance DeleteDBInstance()
 * @method DescribeParameters DescribeParameters()
 * @method RevokeAccountPrivilege RevokeAccountPrivilege()
 * @method ImportData ImportData()
 * @method DescribeDBInstancePerformance DescribeDBInstancePerformance()
 * @method SwitchDBInstanceNetType SwitchDBInstanceNetType()
 * @method DescribeDatabases DescribeDatabases()
 * @method QueryShareDBInstancesService QueryShareDBInstancesService()
 * @method DescribeParameterTemplates DescribeParameterTemplates()
 * @method DescribeSwitchDBInstanceList DescribeSwitchDBInstanceList()
 * @method CreateDBInstance CreateDBInstance()
 * @method DescribeDBInstanceClasses DescribeDBInstanceClasses()
 */
class V20130528
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
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($dBInstanceStorage)
 * @method int getDBInstanceStorage()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyDBInstanceAttribute extends Request
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
 * @method $this setParameters($parameters)
 * @method string getParameters()
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
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
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
 * @method $this setDBInstanceStatus($dBInstanceStatus)
 * @method string getDBInstanceStatus()
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
 * @method $this setConnectionMode($connectionMode)
 * @method string getConnectionMode()
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setOldAccountPassword($oldAccountPassword)
 * @method string getOldAccountPassword()
 * @method $this setAccountPrivilege($accountPrivilege)
 * @method string getAccountPrivilege()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyAccountAttribute extends Request
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
class DescribeAccounts extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDbInstanceId($dbInstanceId)
 * @method string getDbInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setCharacterSetName($characterSetName)
 * @method string getCharacterSetName()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPrivilege($accountPrivilege)
 * @method string getAccountPrivilege()
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
 * @method $this setTargetDBInstanceId($targetDBInstanceId)
 * @method string getTargetDBInstanceId()
 * @method $this setDBInfo($dBInfo)
 * @method string getDBInfo()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class MigratingDB extends Request
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
class DescribeSecurityIps extends Request
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
 * @method $this setRetainInstance($retainInstance)
 * @method string getRetainInstance()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateChildDBInstance extends Request
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
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeDataFiles extends Request
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
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateGuardDBInstance extends Request
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
 * @method $this setuid($uid)
 * @method int getuid()
 * @method $this setbid($bid)
 * @method string getbid()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteChildInstance extends Request
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupStatus($backupStatus)
 * @method string getBackupStatus()
 * @method $this setBackupMode($backupMode)
 * @method int getBackupMode()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setAccountPrivilege($accountPrivilege)
 * @method string getAccountPrivilege()
 * @method $this setAccountDescription($accountDescription)
 * @method string getAccountDescription()
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($backupId)
 * @method string getBackupId()
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSecurityIps($securityIps)
 * @method string getSecurityIps()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setQueryKeyword($queryKeyword)
 * @method string getQueryKeyword()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
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
 * @method $this setReportType($reportType)
 * @method string getReportType()
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setForceSwitch($forceSwitch)
 * @method string getForceSwitch()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SwitchDBInstance extends Request
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
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateImportDataUpload extends Request
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
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
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
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ImportData extends Request
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
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
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
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setDBStatus($dBStatus)
 * @method string getDBStatus()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 */
class QueryShareDBInstancesService extends Request
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
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeSwitchDBInstanceList extends Request
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
 */
class DescribeDBInstanceClasses extends Request
{
}
