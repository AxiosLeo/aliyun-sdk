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
 * @method $this setMaintainTime($MaintainTime)
 * @method string getMaintainTime()
 */
final class ModifyDBInstanceMaintainTime extends RdsCommon
{
    public $action = 'ModifyDBInstanceMaintainTime';
}
