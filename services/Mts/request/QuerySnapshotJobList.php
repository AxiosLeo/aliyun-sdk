<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSnapshotJobIds($SnapshotJobIds)
 * @method string getSnapshotJobIds()
 */
final class QuerySnapshotJobList extends MtsCommon
{
    public $action = 'QuerySnapshotJobList';
}
