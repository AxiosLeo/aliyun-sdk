<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setTarget($Target)
 * @method string getTarget()
 * @method $this setTypes($Types)
 * @method string getTypes()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setConfig($Config)
 * @method string getConfig()
 * @method $this setExtern($Extern)
 * @method string getExtern()
 */
final class DescribeMacConfig extends AegisCommon
{
    public $action = 'DescribeMacConfig';
}
