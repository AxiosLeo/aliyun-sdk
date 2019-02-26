<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setStrategyJson($StrategyJson)
 * @method string getStrategyJson()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setSurveysJson($SurveysJson)
 * @method array getSurveysJson()
 */
final class CreateScenario extends CCCCommon
{
    public $action = 'CreateScenario';
}
