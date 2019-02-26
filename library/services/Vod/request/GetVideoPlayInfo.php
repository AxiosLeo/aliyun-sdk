<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setChannel($Channel)
 * @method string getChannel()
 * @method $this setClientTS($ClientTS)
 * @method integer getClientTS()
 * @method $this setClientVersion($ClientVersion)
 * @method string getClientVersion()
 * @method $this setPlaySign($PlaySign)
 * @method string getPlaySign()
 * @method $this setSignVersion($SignVersion)
 * @method string getSignVersion()
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 */
final class GetVideoPlayInfo extends VodCommon
{
    public $action = 'GetVideoPlayInfo';
}
