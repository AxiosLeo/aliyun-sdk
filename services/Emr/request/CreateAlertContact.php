<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setEmail($Email)
 * @method string getEmail()
 * @method $this setPhoneNumber($PhoneNumber)
 * @method string getPhoneNumber()
 * @method $this setEmailVerificationCode($EmailVerificationCode)
 * @method string getEmailVerificationCode()
 * @method $this setPhoneNumberVerificationCode($PhoneNumberVerificationCode)
 * @method string getPhoneNumberVerificationCode()
 */
final class CreateAlertContact extends EmrCommon
{
    public $action = 'CreateAlertContact';
}
