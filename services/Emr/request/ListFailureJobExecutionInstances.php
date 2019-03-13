<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCount($Count)
 * @method integer getCount()
 */
final class ListFailureJobExecutionInstances extends EmrCommon
{
    public $action = 'ListFailureJobExecutionInstances';
}
