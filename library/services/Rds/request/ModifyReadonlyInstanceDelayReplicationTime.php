<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setReadSQLReplicationTime($ReadSQLReplicationTime)
 * @method string getReadSQLReplicationTime()
 */
final class ModifyReadonlyInstanceDelayReplicationTime extends RdsCommon
{
    public $action = 'ModifyReadonlyInstanceDelayReplicationTime';
}
