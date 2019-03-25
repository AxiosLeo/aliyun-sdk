<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTranscodeTemplateGroupId($TranscodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 * @method $this setTranscodeTemplateIds($TranscodeTemplateIds)
 * @method string getTranscodeTemplateIds()
 * @method $this setForceDelGroup($ForceDelGroup)
 * @method string getForceDelGroup()
 */
final class DeleteTranscodeTemplateGroup extends VodCommon
{
    public $action = 'DeleteTranscodeTemplateGroup';
}
