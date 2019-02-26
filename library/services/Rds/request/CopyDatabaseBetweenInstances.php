<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTargetDBInstanceId($TargetDBInstanceId)
 * @method string getTargetDBInstanceId()
 * @method $this setDbNames($DbNames)
 * @method string getDbNames()
 * @method $this setBackupId($BackupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($RestoreTime)
 * @method string getRestoreTime()
 * @method $this setSyncUserPrivilege($SyncUserPrivilege)
 * @method string getSyncUserPrivilege()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class CopyDatabaseBetweenInstances extends RdsCommon
{
    public $action = 'CopyDatabaseBetweenInstances';
}
