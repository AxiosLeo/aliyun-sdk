<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setSecurityIps($SecurityIps)
 * @method string getSecurityIps()
 * @method $this setDBClusterIPArrayName($DBClusterIPArrayName)
 * @method string getDBClusterIPArrayName()
 * @method $this setDBClusterIPArrayAttribute($DBClusterIPArrayAttribute)
 * @method string getDBClusterIPArrayAttribute()
 */
final class ModifyDBClusterAccessWhitelist extends PolardbCommon
{
    public $action = 'ModifyDBClusterAccessWhitelist';
}
