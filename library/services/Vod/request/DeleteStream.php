<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setJobIds($JobIds)
 * @method string getJobIds()
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 */
final class DeleteStream extends VodCommon
{
    public $action = 'DeleteStream';
}
