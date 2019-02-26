<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setCycleDays($CycleDays)
 * @method string getCycleDays()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setCycleStartTime($CycleStartTime)
 * @method string getCycleStartTime()
 * @method $this setRiskSubTypeName($RiskSubTypeName)
 * @method string getRiskSubTypeName()
 * @method $this setId($Id)
 * @method string getId()
 */
final class ModifyStrategy extends AegisCommon
{
    public $action = 'ModifyStrategy';
}
