<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInput($Input)
 * @method string getInput()
 * @method $this setOutputs($Outputs)
 * @method string getOutputs()
 * @method $this setOutputBucket($OutputBucket)
 * @method string getOutputBucket()
 * @method $this setOutputLocation($OutputLocation)
 * @method string getOutputLocation()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 */
final class SubmitJobs extends MtsCommon
{
    public $action = 'SubmitJobs';
}
