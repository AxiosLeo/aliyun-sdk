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
 * @method $this setTpsType($TpsType)
 * @method string getTpsType()
 * @method $this setTransType($TransType)
 * @method string getTransType()
 * @method $this setParentTopic($ParentTopic)
 * @method string getParentTopic()
 * @method $this setSubTopic($SubTopic)
 * @method string getSubTopic()
 * @method $this setMsgType($MsgType)
 * @method string getMsgType()
 * @method $this setQos($Qos)
 * @method integer getQos()
 * @method $this setBeginTime($BeginTime)
 * @method integer getBeginTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 */
final class OnsMqttQueryMsgTransTrend extends OnsCommon
{
    public $action = 'OnsMqttQueryMsgTransTrend';
}
