<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setConcernLevel($ConcernLevel)
 * @method string getConcernLevel()
 */
final class ModifyVulLevel extends AegisCommon
{
    public $action = 'ModifyVulLevel';
}
