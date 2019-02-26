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
 * @method $this setThreshold($Threshold)
 * @method string getThreshold()
 * @method $this setContacts($Contacts)
 * @method string getContacts()
 * @method $this setDelayTime($DelayTime)
 * @method string getDelayTime()
 * @method $this setBlockTime($BlockTime)
 * @method string getBlockTime()
 * @method $this setAlertTime($AlertTime)
 * @method string getAlertTime()
 * @method $this setLevel($Level)
 * @method string getLevel()
 */
final class OnsWarnCreate extends OnsCommon
{
    public $action = 'OnsWarnCreate';
}
