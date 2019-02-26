<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setMaintainTime($MaintainTime)
 * @method string getMaintainTime()
 */
final class ModifyDBClusterMaintainTime extends PolardbCommon
{
    public $action = 'ModifyDBClusterMaintainTime';
}
