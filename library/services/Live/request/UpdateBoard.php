<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setBoardData($BoardData)
 * @method string getBoardData()
 */
final class UpdateBoard extends LiveCommon
{
    public $action = 'UpdateBoard';
}
