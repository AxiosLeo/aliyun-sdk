<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setAuthKey($AuthKey)
 * @method string getAuthKey()
 * @method $this setAuthSwitch($AuthSwitch)
 * @method string getAuthSwitch()
 * @method $this setCallbackEnable($CallbackEnable)
 * @method integer getCallbackEnable()
 * @method $this setCallbackUri($CallbackUri)
 * @method string getCallbackUri()
 * @method $this setCallbackEvents($CallbackEvents)
 * @method string getCallbackEvents()
 */
final class UpdateBoardCallback extends LiveCommon
{
    public $action = 'UpdateBoardCallback';
}
