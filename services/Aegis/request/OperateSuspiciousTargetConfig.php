<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setTargetType($TargetType)
 * @method string getTargetType()
 * @method $this setTargetOperations($TargetOperations)
 * @method string getTargetOperations()
 */
final class OperateSuspiciousTargetConfig extends AegisCommon
{
    public $action = 'OperateSuspiciousTargetConfig';
}
