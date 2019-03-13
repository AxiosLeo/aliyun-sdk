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
 * @method $this setParentTopic($ParentTopic)
 * @method string getParentTopic()
 * @method $this setSubTopic($SubTopic)
 * @method string getSubTopic()
 */
final class OnsMqttQueryClientByTopic extends OnsCommon
{
    public $action = 'OnsMqttQueryClientByTopic';
}
