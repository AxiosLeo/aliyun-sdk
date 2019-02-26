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
 * @method $this setOrder($Order)
 * @method string getOrder()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeRoomKickoutUserList extends LiveCommon
{
    public $action = 'DescribeRoomKickoutUserList';
}
