<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionString($ConnectionString)
 * @method string getConnectionString()
 */
final class ModifyDBInstanceSSL extends RdsCommon
{
    public $action = 'ModifyDBInstanceSSL';
}
