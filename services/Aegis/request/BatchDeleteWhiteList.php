<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setRiskIdList($RiskIdList)
 * @method string getRiskIdList()
 */
final class BatchDeleteWhiteList extends AegisCommon
{
    public $action = 'BatchDeleteWhiteList';
}
