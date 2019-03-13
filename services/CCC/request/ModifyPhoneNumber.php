<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPhoneNumberId($PhoneNumberId)
 * @method string getPhoneNumberId()
 * @method $this setUsage($Usage)
 * @method string getUsage()
 * @method $this setContactFlowId($ContactFlowId)
 * @method string getContactFlowId()
 */
final class ModifyPhoneNumber extends CCCCommon
{
    public $action = 'ModifyPhoneNumber';
}
