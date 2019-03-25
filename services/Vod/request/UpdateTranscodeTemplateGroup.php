<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setTranscodeTemplateList($TranscodeTemplateList)
 * @method string getTranscodeTemplateList()
 * @method $this setLocked($Locked)
 * @method string getLocked()
 * @method $this setTranscodeTemplateGroupId($TranscodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 */
final class UpdateTranscodeTemplateGroup extends VodCommon
{
    public $action = 'UpdateTranscodeTemplateGroup';
}
