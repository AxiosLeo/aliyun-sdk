<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setDays($Days)
 * @method integer getDays()
 */
final class ModifyAutoDelConfig extends AegisCommon
{
    public $action = 'ModifyAutoDelConfig';
}
