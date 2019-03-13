<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setUid($Uid)
 * @method integer getUid()
 */
final class VerifyAuthentication extends EssCommon
{
    public $action = 'VerifyAuthentication';
}
