<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setVPCId($VPCId)
 * @method string getVPCId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setEffectiveTime($EffectiveTime)
 * @method string getEffectiveTime()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setCategory($Category)
 * @method string getCategory()
 * @method $this setZoneIdSlave1($ZoneIdSlave1)
 * @method string getZoneIdSlave1()
 * @method $this setZoneIdSlave2($ZoneIdSlave2)
 * @method string getZoneIdSlave2()
 */
final class MigrateToOtherZone extends RdsCommon
{
    public $action = 'MigrateToOtherZone';
}
