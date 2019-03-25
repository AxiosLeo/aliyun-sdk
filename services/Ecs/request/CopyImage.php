<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setDestinationImageName($DestinationImageName)
 * @method string getDestinationImageName()
 * @method $this setDestinationDescription($DestinationDescription)
 * @method string getDestinationDescription()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDestinationRegionId($DestinationRegionId)
 * @method string getDestinationRegionId()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setEncrypted($Encrypted)
 * @method boolean getEncrypted()
 */
final class CopyImage extends EcsCommon
{
    public $action = 'CopyImage';
}
