<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setConfig($Config)
 * @method string getConfig()
 * @method $this setTarget($Target)
 * @method string getTarget()
 */
final class ModifyVulTarget extends AegisCommon
{
    public $action = 'ModifyVulTarget';
}
