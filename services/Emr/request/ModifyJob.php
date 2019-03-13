<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setRunParameter($RunParameter)
 * @method string getRunParameter()
 * @method $this setFailAct($FailAct)
 * @method string getFailAct()
 * @method $this setMaxRetry($MaxRetry)
 * @method integer getMaxRetry()
 * @method $this setRetryInterval($RetryInterval)
 * @method integer getRetryInterval()
 */
final class ModifyJob extends EmrCommon
{
    public $action = 'ModifyJob';
}
