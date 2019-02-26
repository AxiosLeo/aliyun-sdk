<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setToAddress($ToAddress)
 * @method string getToAddress()
 */
final class CheckInvalidAddress extends DmCommon
{
    public $action = 'CheckInvalidAddress';
}
