<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTranscodeTaskId($TranscodeTaskId)
 * @method string getTranscodeTaskId()
 */
final class GetTranscodeTask extends VodCommon
{
    public $action = 'GetTranscodeTask';
}
