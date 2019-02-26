<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTemplateName($TemplateName)
 * @method string getTemplateName()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setReceiversName($ReceiversName)
 * @method string getReceiversName()
 * @method $this setAddressType($AddressType)
 * @method integer getAddressType()
 * @method $this setTagName($TagName)
 * @method string getTagName()
 * @method $this setReplyAddress($ReplyAddress)
 * @method string getReplyAddress()
 * @method $this setReplyAddressAlias($ReplyAddressAlias)
 * @method string getReplyAddressAlias()
 * @method $this setClickTrace($ClickTrace)
 * @method string getClickTrace()
 */
final class BatchSendMail extends DmCommon
{
    public $action = 'BatchSendMail';
}
