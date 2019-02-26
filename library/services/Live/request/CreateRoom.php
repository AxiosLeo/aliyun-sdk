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
 * @method $this setTemplateIds($TemplateIds)
 * @method string getTemplateIds()
 * @method $this setUseAppTranscode($UseAppTranscode)
 * @method boolean getUseAppTranscode()
 */
final class CreateRoom extends LiveCommon
{
    public $action = 'CreateRoom';
}
