<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($ConnectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($Port)
 * @method string getPort()
 */
final class AllocateInstancePrivateConnection extends RdsCommon
{
    public $action = 'AllocateInstancePrivateConnection';
}
