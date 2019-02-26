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
 * @method $this setMediaDetailConfig($MediaDetailConfig)
 * @method string getMediaDetailConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitMediaDetailJob extends MtsCommon
{
    public $action = 'SubmitMediaDetailJob';
}
