<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setRegionTag($RegionTag)
 * @method string getRegionTag()
 * @method $this setRegionName($RegionName)
 * @method string getRegionName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setHybridCloudEnable($HybridCloudEnable)
 * @method boolean getHybridCloudEnable()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 */
final class InsertOrUpdateRegion extends EdasCommon
{
    public $action = 'InsertOrUpdateRegion';
}
