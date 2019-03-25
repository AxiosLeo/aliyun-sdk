<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTranscodeTemplateGroupId($TranscodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 */
final class GetTranscodeTemplateGroup extends VodCommon
{
    public $action = 'GetTranscodeTemplateGroup';
}
