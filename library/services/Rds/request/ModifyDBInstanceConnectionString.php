<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setCurrentConnectionString($CurrentConnectionString)
 * @method string getCurrentConnectionString()
 * @method $this setConnectionStringPrefix($ConnectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($Port)
 * @method string getPort()
 */
final class ModifyDBInstanceConnectionString extends RdsCommon
{
    public $action = 'ModifyDBInstanceConnectionString';
}
