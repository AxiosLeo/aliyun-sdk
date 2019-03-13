<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setBackupId($BackupId)
 * @method string getBackupId()
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
final class DescribeBackups extends PolardbCommon
{
    public $action = 'DescribeBackups';
}
