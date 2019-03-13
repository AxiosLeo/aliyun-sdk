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
 * @method $this setBackupLocation($BackupLocation)
 * @method string getBackupLocation()
 * @method $this setBackupStatus($BackupStatus)
 * @method string getBackupStatus()
 * @method $this setBackupMode($BackupMode)
 * @method string getBackupMode()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeBackups extends RdsCommon
{
    public $action = 'DescribeBackups';
}
