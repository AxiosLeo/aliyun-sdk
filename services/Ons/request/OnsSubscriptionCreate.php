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
 * @method $this setConsumerId($ConsumerId)
 * @method string getConsumerId()
 * @method $this setTopic($Topic)
 * @method string getTopic()
 */
final class OnsSubscriptionCreate extends OnsCommon
{
    public $action = 'OnsSubscriptionCreate';
}
