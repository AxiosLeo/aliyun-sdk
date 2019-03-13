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
 * @method $this setKey($Key)
 * @method string getKey()
 */
final class OnsMessageGetByKey extends OnsCommon
{
    public $action = 'OnsMessageGetByKey';
}
