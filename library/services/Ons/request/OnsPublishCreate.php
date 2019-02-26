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
 * @method $this setProducerId($ProducerId)
 * @method string getProducerId()
 * @method $this setTopic($Topic)
 * @method string getTopic()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 */
final class OnsPublishCreate extends OnsCommon
{
    public $action = 'OnsPublishCreate';
}
