<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setParameters($Parameters)
 * @method string getParameters()
 * @method $this setEffectiveTime($EffectiveTime)
 * @method string getEffectiveTime()
 */
final class ModifyDBClusterParameters extends PolardbCommon
{
    public $action = 'ModifyDBClusterParameters';
}
