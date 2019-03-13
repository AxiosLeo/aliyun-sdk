<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setStreamName($StreamName)
 * @method string getStreamName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setStreamType($StreamType)
 * @method string getStreamType()
 * @method $this setQueryType($QueryType)
 * @method string getQueryType()
 * @method $this setOrderBy($OrderBy)
 * @method string getOrderBy()
 */
final class DescribeLiveStreamsPublishList extends LiveCommon
{
    public $action = 'DescribeLiveStreamsPublishList';
}
