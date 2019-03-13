<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInput($Input)
 * @method string getInput()
 * @method $this setCoverImages($CoverImages)
 * @method string getCoverImages()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setBarrages($Barrages)
 * @method string getBarrages()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 * @method $this setVideoCensorConfig($VideoCensorConfig)
 * @method string getVideoCensorConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitMediaCensorJob extends MtsCommon
{
    public $action = 'SubmitMediaCensorJob';
}
