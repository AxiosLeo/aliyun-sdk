<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setRiskIdList($RiskIdList)
 * @method string getRiskIdList()
 * @method $this setReason($Reason)
 * @method string getReason()
 */
final class CreateUserWhiteList extends AegisCommon
{
    public $action = 'CreateUserWhiteList';
}
