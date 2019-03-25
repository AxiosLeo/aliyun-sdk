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
 */
final class DescribeTargetConfig extends AegisCommon
{
    public $action = 'DescribeTargetConfig';
}
