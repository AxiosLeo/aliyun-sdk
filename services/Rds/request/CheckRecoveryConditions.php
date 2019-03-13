<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($BackupId)
 * @method string getBackupId()
 * @method $this setBackupFile($BackupFile)
 * @method string getBackupFile()
 * @method $this setRestoreTime($RestoreTime)
 * @method string getRestoreTime()
 */
final class CheckRecoveryConditions extends RdsCommon
{
    public $action = 'CheckRecoveryConditions';
}
