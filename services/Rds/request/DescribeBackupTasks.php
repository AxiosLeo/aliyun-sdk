<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setFlag($Flag)
 * @method string getFlag()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupJobId($BackupJobId)
 * @method string getBackupJobId()
 * @method $this setBackupMode($BackupMode)
 * @method string getBackupMode()
 * @method $this setBackupJobStatus($BackupJobStatus)
 * @method string getBackupJobStatus()
 */
final class DescribeBackupTasks extends RdsCommon
{
    public $action = 'DescribeBackupTasks';
}
