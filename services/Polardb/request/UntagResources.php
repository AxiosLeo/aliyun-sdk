<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setResourceId($ResourceId)
 * @method array getResourceId()
 * @method $this setTagKey($TagKey)
 * @method array getTagKey()
 * @method $this setAll($All)
 * @method boolean getAll()
 */
final class UntagResources extends PolardbCommon
{
    public $action = 'UntagResources';
}
