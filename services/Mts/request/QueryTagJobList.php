<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTagJobIds($TagJobIds)
 * @method string getTagJobIds()
 */
final class QueryTagJobList extends MtsCommon
{
    public $action = 'QueryTagJobList';
}
