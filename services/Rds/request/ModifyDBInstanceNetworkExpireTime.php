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
 * @method $this setClassicExpiredDays($ClassicExpiredDays)
 * @method integer getClassicExpiredDays()
 */
final class ModifyDBInstanceNetworkExpireTime extends RdsCommon
{
    public $action = 'ModifyDBInstanceNetworkExpireTime';
}
