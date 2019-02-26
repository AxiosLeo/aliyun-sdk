<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setMode($Mode)
 * @method string getMode()
 * @method $this setTarget($Target)
 * @method string getTarget()
 */
final class CreateVerificationCode extends EmrCommon
{
    public $action = 'CreateVerificationCode';
}
