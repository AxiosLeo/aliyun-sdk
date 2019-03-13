<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setActive($Active)
 * @method boolean getActive()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setYarnsiteconfig($Yarnsiteconfig)
 * @method string getYarnsiteconfig()
 * @method $this setConfig($Config)
 * @method array getConfig()
 */
final class ModifyResourcePool extends EmrCommon
{
    public $action = 'ModifyResourcePool';
}
