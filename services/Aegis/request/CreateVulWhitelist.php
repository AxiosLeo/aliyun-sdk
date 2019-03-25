<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setWhitelist($Whitelist)
 * @method string getWhitelist()
 * @method $this setReason($Reason)
 * @method string getReason()
 */
final class CreateVulWhitelist extends AegisCommon
{
    public $action = 'CreateVulWhitelist';
}
