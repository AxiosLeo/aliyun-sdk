<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAIVideoCensorJobIds($AIVideoCensorJobIds)
 * @method string getAIVideoCensorJobIds()
 */
final class ListAIVideoCensorJob extends VodCommon
{
    public $action = 'ListAIVideoCensorJob';
}
