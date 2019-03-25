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
 * @method $this setBackupId($BackupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($RestoreTime)
 * @method string getRestoreTime()
 * @method $this setTableMeta($TableMeta)
 * @method string getTableMeta()
 */
final class RestoreTable extends RdsCommon
{
    public $action = 'RestoreTable';
}
