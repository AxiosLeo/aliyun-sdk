<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInputVideo($InputVideo)
 * @method string getInputVideo()
 * @method $this setInputImage($InputImage)
 * @method string getInputImage()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 * @method $this setFpDBId($FpDBId)
 * @method string getFpDBId()
 * @method $this setConfig($Config)
 * @method string getConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitImageSearchJob extends MtsCommon
{
    public $action = 'SubmitImageSearchJob';
}
