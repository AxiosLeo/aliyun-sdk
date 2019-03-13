<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setEffectiveTime($EffectiveTime)
 * @method string getEffectiveTime()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 */
final class MigrateToOtherZone extends RdsCommon
{
    public $action = 'MigrateToOtherZone';
}
