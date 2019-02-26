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
 * @method $this setTopic($Topic)
 * @method string getTopic()
 * @method $this setBeginTime($BeginTime)
 * @method integer getBeginTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setType($Type)
 * @method integer getType()
 */
final class OnsTrendTopicInputTps extends OnsCommon
{
    public $action = 'OnsTrendTopicInputTps';
}
