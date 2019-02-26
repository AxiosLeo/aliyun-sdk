<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($ScenarioId)
 * @method string getScenarioId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setVariables($Variables)
 * @method string getVariables()
 */
final class ModifyScenario extends CCCCommon
{
    public $action = 'ModifyScenario';
}
