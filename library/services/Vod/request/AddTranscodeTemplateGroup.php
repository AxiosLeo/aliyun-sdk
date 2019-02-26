<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setResourceRealOwnerId($ResourceRealOwnerId)
 * @method integer getResourceRealOwnerId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setTranscodeTemplateList($TranscodeTemplateList)
 * @method string getTranscodeTemplateList()
 * @method $this setTranscodeTemplateGroupId($TranscodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 */
final class AddTranscodeTemplateGroup extends VodCommon
{
    public $action = 'AddTranscodeTemplateGroup';
}
