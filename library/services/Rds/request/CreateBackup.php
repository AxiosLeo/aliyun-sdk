<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($DBName)
 * @method string getDBName()
 * @method $this setBackupStrategy($BackupStrategy)
 * @method string getBackupStrategy()
 * @method $this setBackupMethod($BackupMethod)
 * @method string getBackupMethod()
 * @method $this setBackupType($BackupType)
 * @method string getBackupType()
 */
final class CreateBackup extends RdsCommon
{
    public $action = 'CreateBackup';
}
