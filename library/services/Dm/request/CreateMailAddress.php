<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setReplyAddress($ReplyAddress)
 * @method string getReplyAddress()
 * @method $this setSendtype($Sendtype)
 * @method string getSendtype()
 */
final class CreateMailAddress extends DmCommon
{
    public $action = 'CreateMailAddress';
}
