<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setPoolType($PoolType)
 * @method string getPoolType()
 * @method $this setActive($Active)
 * @method boolean getActive()
 * @method $this setNote($Note)
 * @method string getNote()
 * @method $this setYarnSiteConfig($YarnSiteConfig)
 * @method string getYarnSiteConfig()
 * @method $this setConfig($Config)
 * @method array getConfig()
 */
final class CreateResourcePool extends EmrCommon
{
    public $action = 'CreateResourcePool';
}
