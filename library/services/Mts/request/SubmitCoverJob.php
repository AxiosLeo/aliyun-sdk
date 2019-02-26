<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInput($Input)
 * @method string getInput()
 * @method $this setCoverConfig($CoverConfig)
 * @method string getCoverConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 */
final class SubmitCoverJob extends MtsCommon
{
    public $action = 'SubmitCoverJob';
}
