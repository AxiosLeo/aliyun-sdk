<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setOSSBucket($OSSBucket)
 * @method string getOSSBucket()
 * @method $this setOSSPrefix($OSSPrefix)
 * @method string getOSSPrefix()
 * @method $this setImageFormat($ImageFormat)
 * @method string getImageFormat()
 * @method $this setRoleName($RoleName)
 * @method string getRoleName()
 */
final class ExportImage extends EcsCommon
{
    public $action = 'ExportImage';
}
