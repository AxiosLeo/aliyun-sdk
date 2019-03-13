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
 * @method $this setFlowJson($FlowJson)
 * @method string getFlowJson()
 * @method $this setCorpora($Corpora)
 * @method string getCorpora()
 * @method $this setSpeechOptimizationParam($SpeechOptimizationParam)
 * @method string getSpeechOptimizationParam()
 * @method $this setGlobalQuestions($GlobalQuestions)
 * @method string getGlobalQuestions()
 * @method $this setRole($Role)
 * @method string getRole()
 * @method $this setRound($Round)
 * @method integer getRound()
 */
final class CreateSurvey extends CCCCommon
{
    public $action = 'CreateSurvey';
}
