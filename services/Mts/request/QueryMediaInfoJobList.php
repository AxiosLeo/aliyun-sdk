<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaInfoJobIds($MediaInfoJobIds)
 * @method string getMediaInfoJobIds()
 */
final class QueryMediaInfoJobList extends MtsCommon
{
    public $action = 'QueryMediaInfoJobList';
}
