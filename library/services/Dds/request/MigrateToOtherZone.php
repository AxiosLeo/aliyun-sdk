<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setEffectiveTime($EffectiveTime)
 * @method string getEffectiveTime()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 */
final class MigrateToOtherZone extends DdsCommon
{
    public $action = 'MigrateToOtherZone';
}
