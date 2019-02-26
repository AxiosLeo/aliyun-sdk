<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAIVideoCoverJobIds($AIVideoCoverJobIds)
 * @method string getAIVideoCoverJobIds()
 */
final class ListAIVideoCoverJob extends VodCommon
{
    public $action = 'ListAIVideoCoverJob';
}
