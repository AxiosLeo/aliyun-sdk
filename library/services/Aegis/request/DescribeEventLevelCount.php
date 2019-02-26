<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setFrom($From)
 * @method string getFrom()
 */
final class DescribeEventLevelCount extends AegisCommon
{
    public $action = 'DescribeEventLevelCount';
}
