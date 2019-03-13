<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumberId($PhoneNumberId)
 * @method string getPhoneNumberId()
 */
final class RemovePhoneNumber extends CCCCommon
{
    public $action = 'RemovePhoneNumber';
}
