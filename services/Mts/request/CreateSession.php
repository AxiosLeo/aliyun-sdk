<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setEndUserId($EndUserId)
 * @method string getEndUserId()
 * @method $this setSessionTime($SessionTime)
 * @method integer getSessionTime()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 */
final class CreateSession extends MtsCommon
{
    public $action = 'CreateSession';
}
