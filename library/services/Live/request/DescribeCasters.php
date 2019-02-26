<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCasterId($CasterId)
 * @method string getCasterId()
 * @method $this setCasterName($CasterName)
 * @method string getCasterName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setStatus($Status)
 * @method integer getStatus()
 */
final class DescribeCasters extends LiveCommon
{
    public $action = 'DescribeCasters';
}
