<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 * @method $this setPrimaryKey($PrimaryKey)
 * @method string getPrimaryKey()
 * @method $this setFpDBId($FpDBId)
 * @method string getFpDBId()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitMediaFpDeleteJob extends MtsCommon
{
    public $action = 'SubmitMediaFpDeleteJob';
}
