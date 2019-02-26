<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setStreamName($StreamName)
 * @method string getStreamName()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setQueryType($QueryType)
 * @method string getQueryType()
 * @method $this setPageNo($PageNo)
 * @method integer getPageNo()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setSortBy($SortBy)
 * @method string getSortBy()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 */
final class ListLiveRecordVideo extends VodCommon
{
    public $action = 'ListLiveRecordVideo';
}
