<?php
namespace aliyun\sdk\services\Ons\request;

use aliyun\sdk\services\Ons\OnsCommon;

/**
 * @method $this setOnsRegionId($OnsRegionId)
 * @method string getOnsRegionId()
 * @method $this setOnsPlatform($OnsPlatform)
 * @method string getOnsPlatform()
 * @method $this setPreventCache($PreventCache)
 * @method integer getPreventCache()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setBeginTime($BeginTime)
 * @method integer getBeginTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 */
final class OnsMqttQueryHistoryOnline extends OnsCommon
{
    public $action = 'OnsMqttQueryHistoryOnline';
}
