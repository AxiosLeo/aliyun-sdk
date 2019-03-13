<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMailAddressId($MailAddressId)
 * @method integer getMailAddressId()
 * @method $this setReplyAddress($ReplyAddress)
 * @method string getReplyAddress()
 * @method $this setPassword($Password)
 * @method string getPassword()
 */
final class ModifyMailAddress extends DmCommon
{
    public $action = 'ModifyMailAddress';
}
