<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setVideo($Video)
 * @method string getVideo()
 * @method $this setImages($Images)
 * @method string getImages()
 * @method $this setTexts($Texts)
 * @method string getTexts()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 * @method $this setCensorConfig($CensorConfig)
 * @method string getCensorConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitMCJob extends MtsCommon
{
    public $action = 'SubmitMCJob';
}
