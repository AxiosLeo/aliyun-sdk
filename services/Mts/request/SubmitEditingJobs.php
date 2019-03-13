<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setEditingInputs($EditingInputs)
 * @method string getEditingInputs()
 * @method $this setEditingJobOutputs($EditingJobOutputs)
 * @method string getEditingJobOutputs()
 * @method $this setOutputBucket($OutputBucket)
 * @method string getOutputBucket()
 * @method $this setOutputLocation($OutputLocation)
 * @method string getOutputLocation()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 */
final class SubmitEditingJobs extends MtsCommon
{
    public $action = 'SubmitEditingJobs';
}
