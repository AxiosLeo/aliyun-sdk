<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setTypes($Types)
 * @method string getTypes()
 * @method $this setLastDays($LastDays)
 * @method integer getLastDays()
 * @method $this setVulEventLevels($VulEventLevels)
 * @method string getVulEventLevels()
 * @method $this setSuspiciousEventLevels($SuspiciousEventLevels)
 * @method string getSuspiciousEventLevels()
 * @method $this setHealthEventLevels($HealthEventLevels)
 * @method string getHealthEventLevels()
 */
final class DescribeEventCountCurve extends AegisCommon
{
    public $action = 'DescribeEventCountCurve';
}
