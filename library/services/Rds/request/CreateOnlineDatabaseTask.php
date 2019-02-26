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
 * @method $this setDBName($DBName)
 * @method string getDBName()
 * @method $this setMigrateTaskId($MigrateTaskId)
 * @method string getMigrateTaskId()
 * @method $this setCheckDBMode($CheckDBMode)
 * @method string getCheckDBMode()
 */
final class CreateOnlineDatabaseTask extends RdsCommon
{
    public $action = 'CreateOnlineDatabaseTask';
}
