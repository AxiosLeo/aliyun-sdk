<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setResourceQueueId($ResourceQueueId)
 * @method string getResourceQueueId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DeleteResourceQueue extends EmrCommon
{
    public $action = 'DeleteResourceQueue';
}
