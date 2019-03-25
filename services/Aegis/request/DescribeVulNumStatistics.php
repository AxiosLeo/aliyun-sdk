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
 * @method $this setCreateTsStart($CreateTsStart)
 * @method integer getCreateTsStart()
 * @method $this setCreateTsEnd($CreateTsEnd)
 * @method integer getCreateTsEnd()
 */
final class DescribeVulNumStatistics extends AegisCommon
{
    public $action = 'DescribeVulNumStatistics';
}
