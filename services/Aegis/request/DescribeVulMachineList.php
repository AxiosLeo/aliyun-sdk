<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setUuids($Uuids)
 * @method string getUuids()
 * @method $this setStartTs($StartTs)
 * @method integer getStartTs()
 * @method $this setEndTs($EndTs)
 * @method integer getEndTs()
 */
final class DescribeVulMachineList extends AegisCommon
{
    public $action = 'DescribeVulMachineList';
}
