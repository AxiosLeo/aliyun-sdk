<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setParamName($ParamName)
 * @method string getParamName()
 * @method $this setParamValue($ParamValue)
 * @method string getParamValue()
 */
final class ModifyJobExecutionPlanParam extends EmrCommon
{
    public $action = 'ModifyJobExecutionPlanParam';
}
