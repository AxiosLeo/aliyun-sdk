<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setType($Type)
 * @method string getType()
 */
final class DescribeDrdsInstances extends DrdsCommon
{
    public $action = 'DescribeDrdsInstances';
}
