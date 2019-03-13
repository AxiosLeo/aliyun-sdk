<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setSchedulerType($SchedulerType)
 * @method string getSchedulerType()
 */
final class ModifyResourcePoolSchedulerType extends EmrCommon
{
    public $action = 'ModifyResourcePoolSchedulerType';
}
