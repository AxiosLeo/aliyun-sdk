<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setTemplateGroupId($TemplateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 * @method $this setEncryptConfig($EncryptConfig)
 * @method string getEncryptConfig()
 * @method $this setOverrideParams($OverrideParams)
 * @method string getOverrideParams()
 * @method $this setPriority($Priority)
 * @method string getPriority()
 */
final class SubmitTranscodeJobs extends VodCommon
{
    public $action = 'SubmitTranscodeJobs';
}
