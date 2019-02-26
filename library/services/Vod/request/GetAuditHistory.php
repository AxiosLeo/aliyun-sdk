<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setPageNo($PageNo)
 * @method integer getPageNo()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setSortBy($SortBy)
 * @method string getSortBy()
 */
final class GetAuditHistory extends VodCommon
{
    public $action = 'GetAuditHistory';
}
