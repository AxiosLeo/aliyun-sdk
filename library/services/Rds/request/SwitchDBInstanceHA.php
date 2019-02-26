<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($NodeId)
 * @method string getNodeId()
 * @method $this setOperation($Operation)
 * @method string getOperation()
 * @method $this setForce($Force)
 * @method string getForce()
 * @method $this setEffectiveTime($EffectiveTime)
 * @method string getEffectiveTime()
 */
final class SwitchDBInstanceHA extends RdsCommon
{
    public $action = 'SwitchDBInstanceHA';
}
