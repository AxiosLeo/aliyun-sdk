<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInput($Input)
 * @method string getInput()
 * @method $this setAnalysisConfig($AnalysisConfig)
 * @method string getAnalysisConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 * @method $this setPriority($Priority)
 * @method string getPriority()
 */
final class SubmitAnalysisJob extends MtsCommon
{
    public $action = 'SubmitAnalysisJob';
}
