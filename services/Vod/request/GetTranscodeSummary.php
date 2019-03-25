<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setVideoIds($VideoIds)
 * @method string getVideoIds()
 */
final class GetTranscodeSummary extends VodCommon
{
    public $action = 'GetTranscodeSummary';
}
