<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRestoreType($RestoreType)
 * @method string getRestoreType()
 * @method $this setBackupSetID($BackupSetID)
 * @method string getBackupSetID()
 * @method $this setRestoreTime($RestoreTime)
 * @method string getRestoreTime()
 * @method $this setGetDbName($GetDbName)
 * @method string getGetDbName()
 * @method $this setPattern($Pattern)
 * @method string getPattern()
 * @method $this setPageSize($PageSize)
 * @method string getPageSize()
 * @method $this setPageIndex($PageIndex)
 * @method string getPageIndex()
 */
final class DescribeMetaList extends RdsCommon
{
    public $action = 'DescribeMetaList';
}
