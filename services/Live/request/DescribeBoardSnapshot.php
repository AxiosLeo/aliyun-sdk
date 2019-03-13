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
 */
final class DescribeBoardSnapshot extends LiveCommon
{
    public $action = 'DescribeBoardSnapshot';
}
