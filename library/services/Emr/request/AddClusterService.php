<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setComment($Comment)
 * @method string getComment()
 * @method $this setService($Service)
 * @method array getService()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 */
final class AddClusterService extends EmrCommon
{
    public $action = 'AddClusterService';
}
