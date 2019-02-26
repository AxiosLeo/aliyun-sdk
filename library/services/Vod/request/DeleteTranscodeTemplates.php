<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setResourceRealOwnerId($ResourceRealOwnerId)
 * @method integer getResourceRealOwnerId()
 * @method $this setTranscodeTemplateGroupId($TranscodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 * @method $this setTranscodeTemplateIdList($TranscodeTemplateIdList)
 * @method string getTranscodeTemplateIdList()
 */
final class DeleteTranscodeTemplates extends VodCommon
{
    public $action = 'DeleteTranscodeTemplates';
}
