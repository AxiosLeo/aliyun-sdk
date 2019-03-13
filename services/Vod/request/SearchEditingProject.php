<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setPageNo($PageNo)
 * @method integer getPageNo()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setSortBy($SortBy)
 * @method string getSortBy()
 * @method $this setTitle($Title)
 * @method string getTitle()
 */
final class SearchEditingProject extends VodCommon
{
    public $action = 'SearchEditingProject';
}
