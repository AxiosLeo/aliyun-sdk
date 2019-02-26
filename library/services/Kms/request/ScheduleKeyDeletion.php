<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setKeyId($KeyId)
 * @method string getKeyId()
 * @method $this setPendingWindowInDays($PendingWindowInDays)
 * @method integer getPendingWindowInDays()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 */
final class ScheduleKeyDeletion extends KmsCommon
{
    public $action = 'ScheduleKeyDeletion';
}
