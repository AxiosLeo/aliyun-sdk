<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setSnapshotType($SnapshotType)
 * @method string getSnapshotType()
 * @method $this setAuthTimeout($AuthTimeout)
 * @method string getAuthTimeout()
 * @method $this setPageSize($PageSize)
 * @method string getPageSize()
 * @method $this setPageNo($PageNo)
 * @method string getPageNo()
 */
final class ListSnapshots extends VodCommon
{
    public $action = 'ListSnapshots';
}
