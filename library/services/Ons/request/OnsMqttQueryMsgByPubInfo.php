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
 * @method $this setClientId($ClientId)
 * @method string getClientId()
 * @method $this setBeginTime($BeginTime)
 * @method integer getBeginTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 */
final class OnsMqttQueryMsgByPubInfo extends OnsCommon
{
    public $action = 'OnsMqttQueryMsgByPubInfo';
}
