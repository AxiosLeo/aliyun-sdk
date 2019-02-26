<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setRoomId($RoomId)
 * @method string getRoomId()
 * @method $this setAnchorId($AnchorId)
 * @method string getAnchorId()
 * @method $this setRoomStatus($RoomStatus)
 * @method integer getRoomStatus()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setOrder($Order)
 * @method string getOrder()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeRoomList extends LiveCommon
{
    public $action = 'DescribeRoomList';
}
