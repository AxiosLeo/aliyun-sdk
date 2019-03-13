<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSqlDelay($SqlDelay)
 * @method string getSqlDelay()
 */
final class ModifyMySQLDBInstanceDelay extends RdsCommon
{
    public $action = 'ModifyMySQLDBInstanceDelay';
}
