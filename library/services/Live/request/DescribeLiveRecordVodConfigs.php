<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setStreamName($StreamName)
 * @method string getStreamName()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeLiveRecordVodConfigs extends LiveCommon
{
    public $action = 'DescribeLiveRecordVodConfigs';
}
