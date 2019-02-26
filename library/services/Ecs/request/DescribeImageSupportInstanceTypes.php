<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setActionType($ActionType)
 * @method string getActionType()
 * @method $this setFilter($Filter)
 * @method array getFilter()
 */
final class DescribeImageSupportInstanceTypes extends EcsCommon
{
    public $action = 'DescribeImageSupportInstanceTypes';
}
