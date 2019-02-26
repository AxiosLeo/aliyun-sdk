<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setAppUid($AppUid)
 * @method string getAppUid()
 * @method $this setBoardId($BoardId)
 * @method string getBoardId()
 */
final class ApplyBoardToken extends LiveCommon
{
    public $action = 'ApplyBoardToken';
}
