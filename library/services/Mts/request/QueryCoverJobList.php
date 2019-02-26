<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setCoverJobIds($CoverJobIds)
 * @method string getCoverJobIds()
 */
final class QueryCoverJobList extends MtsCommon
{
    public $action = 'QueryCoverJobList';
}
