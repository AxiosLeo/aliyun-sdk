<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionMode($ConnectionMode)
 * @method string getConnectionMode()
 */
final class ModifyDBInstanceConnectionMode extends RdsCommon
{
    public $action = 'ModifyDBInstanceConnectionMode';
}
