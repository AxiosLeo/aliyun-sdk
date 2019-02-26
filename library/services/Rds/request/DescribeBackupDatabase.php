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
 */
final class DescribeBackupDatabase extends RdsCommon
{
    public $action = 'DescribeBackupDatabase';
}
