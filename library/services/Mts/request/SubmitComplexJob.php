<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInputs($Inputs)
 * @method string getInputs()
 * @method $this setComplexConfigs($ComplexConfigs)
 * @method string getComplexConfigs()
 * @method $this setTranscodeOutput($TranscodeOutput)
 * @method string getTranscodeOutput()
 * @method $this setOutputBucket($OutputBucket)
 * @method string getOutputBucket()
 * @method $this setOutputLocation($OutputLocation)
 * @method string getOutputLocation()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitComplexJob extends MtsCommon
{
    public $action = 'SubmitComplexJob';
}
