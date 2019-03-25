<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUuids($Uuids)
 * @method string getUuids()
 * @method $this setStrategyId($StrategyId)
 * @method integer getStrategyId()
 */
final class DescribeRiskType extends AegisCommon
{
    public $action = 'DescribeRiskType';
}
