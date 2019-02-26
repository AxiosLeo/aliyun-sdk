<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInput($Input)
 * @method string getInput()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 * @method $this setVideoSummaryConfig($VideoSummaryConfig)
 * @method string getVideoSummaryConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitVideoSummaryJob extends MtsCommon
{
    public $action = 'SubmitVideoSummaryJob';
}
