<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSenderAddressId($SenderAddressId)
 * @method string getSenderAddressId()
 * @method $this setSenderAddress($SenderAddress)
 * @method string getSenderAddress()
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setStatus($Status)
 * @method string getStatus()
 */
final class ModifySenderAddressNotification extends DmCommon
{
    public $action = 'ModifySenderAddressNotification';
}
