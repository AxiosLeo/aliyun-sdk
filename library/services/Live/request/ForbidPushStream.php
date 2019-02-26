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
 * @method $this setUserData($UserData)
 * @method string getUserData()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 */
final class ForbidPushStream extends LiveCommon
{
    public $action = 'ForbidPushStream';
}
