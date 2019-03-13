<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setResourcePoolId($ResourcePoolId)
 * @method string getResourcePoolId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DeleteResourcePool extends EmrCommon
{
    public $action = 'DeleteResourcePool';
}
