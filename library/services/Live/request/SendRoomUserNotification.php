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
 * @method $this setAppUid($AppUid)
 * @method string getAppUid()
 * @method $this setToAppUid($ToAppUid)
 * @method string getToAppUid()
 * @method $this setData($Data)
 * @method string getData()
 * @method $this setPriority($Priority)
 * @method integer getPriority()
 */
final class SendRoomUserNotification extends LiveCommon
{
    public $action = 'SendRoomUserNotification';
}
