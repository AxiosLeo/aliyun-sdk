<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setCateId($CateId)
 * @method integer getCateId()
 * @method $this setStatus($Status)
 * @method string getStatus()
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
 * @method $this setStorageLocation($StorageLocation)
 * @method string getStorageLocation()
 */
final class GetVideoList extends VodCommon
{
    public $action = 'GetVideoList';
}
