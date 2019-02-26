<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaIds($MediaIds)
 * @method string getMediaIds()
 * @method $this setIncludePlayList($IncludePlayList)
 * @method boolean getIncludePlayList()
 * @method $this setIncludeSnapshotList($IncludeSnapshotList)
 * @method boolean getIncludeSnapshotList()
 * @method $this setIncludeMediaInfo($IncludeMediaInfo)
 * @method boolean getIncludeMediaInfo()
 * @method $this setIncludeSummaryList($IncludeSummaryList)
 * @method boolean getIncludeSummaryList()
 */
final class QueryMediaList extends MtsCommon
{
    public $action = 'QueryMediaList';
}
