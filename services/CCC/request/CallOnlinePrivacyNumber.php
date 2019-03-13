<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setTelA($TelA)
 * @method string getTelA()
 * @method $this setTelB($TelB)
 * @method string getTelB()
 */
final class CallOnlinePrivacyNumber extends CCCCommon
{
    public $action = 'CallOnlinePrivacyNumber';
}
