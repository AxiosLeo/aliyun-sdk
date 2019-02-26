<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setResourceRealOwnerId($ResourceRealOwnerId)
 * @method integer getResourceRealOwnerId()
 */
final class ListTranscodeTemplateGroup extends VodCommon
{
    public $action = 'ListTranscodeTemplateGroup';
}
