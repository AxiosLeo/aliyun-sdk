<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setVolume($Volume)
 * @method string getVolume()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setPath($Path)
 * @method string getPath()
 * @method $this setRecursive($Recursive)
 * @method boolean getRecursive()
 * @method $this setPolicy($Policy)
 * @method string getPolicy()
 * @method $this setWeekday($Weekday)
 * @method integer getWeekday()
 * @method $this setHour($Hour)
 * @method integer getHour()
 * @method $this setEnabled($Enabled)
 * @method boolean getEnabled()
 */
final class ModifyTieringJob extends NASCommon
{
    public $action = 'ModifyTieringJob';
}
