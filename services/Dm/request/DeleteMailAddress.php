<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMailAddressId($MailAddressId)
 * @method integer getMailAddressId()
 */
final class DeleteMailAddress extends DmCommon
{
    public $action = 'DeleteMailAddress';
}
