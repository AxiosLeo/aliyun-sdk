<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setPreprocessType($PreprocessType)
 * @method string getPreprocessType()
 */
final class SubmitPreprocessJobs extends VodCommon
{
    public $action = 'SubmitPreprocessJobs';
}
