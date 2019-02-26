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
final class JoinBoard extends LiveCommon
{
    public $action = 'JoinBoard';
}
