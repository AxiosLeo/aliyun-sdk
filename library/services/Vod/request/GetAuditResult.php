<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 */
final class GetAuditResult extends VodCommon
{
    public $action = 'GetAuditResult';
}
