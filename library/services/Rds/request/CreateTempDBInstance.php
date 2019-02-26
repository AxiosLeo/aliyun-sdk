<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($BackupId)
 * @method integer getBackupId()
 * @method $this setRestoreTime($RestoreTime)
 * @method string getRestoreTime()
 */
final class CreateTempDBInstance extends RdsCommon
{
    public $action = 'CreateTempDBInstance';
}
