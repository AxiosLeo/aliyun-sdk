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
 * @method $this setDBInstanceDescription($DBInstanceDescription)
 * @method string getDBInstanceDescription()
 */
final class ModifyDBInstanceDescription extends RdsCommon
{
    public $action = 'ModifyDBInstanceDescription';
}
