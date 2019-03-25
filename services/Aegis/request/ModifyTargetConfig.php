<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setUuid($Uuid)
 * @method string getUuid()
 * @method $this setConfig($Config)
 * @method string getConfig()
 */
final class ModifyTargetConfig extends AegisCommon
{
    public $action = 'ModifyTargetConfig';
}
