<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setEffectiveTime($EffectiveTime)
 * @method string getEffectiveTime()
 */
final class MigrateToOtherZone extends RKvstoreCommon
{
    public $action = 'MigrateToOtherZone';
}
