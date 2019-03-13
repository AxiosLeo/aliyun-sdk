<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($ScenarioId)
 * @method string getScenarioId()
 * @method $this setSurveyId($SurveyId)
 * @method string getSurveyId()
 */
final class GetSurvey extends CCCCommon
{
    public $action = 'GetSurvey';
}
