<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setBoardId($BoardId)
 * @method string getBoardId()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 */
final class StartBoardRecord extends LiveCommon
{
    public $action = 'StartBoardRecord';
}
