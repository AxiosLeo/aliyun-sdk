<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setAddressType($AddressType)
 * @method integer getAddressType()
 * @method $this setTagName($TagName)
 * @method string getTagName()
 * @method $this setReplyToAddress($ReplyToAddress)
 * @method boolean getReplyToAddress()
 * @method $this setToAddress($ToAddress)
 * @method string getToAddress()
 * @method $this setSubject($Subject)
 * @method string getSubject()
 * @method $this setHtmlBody($HtmlBody)
 * @method string getHtmlBody()
 * @method $this setTextBody($TextBody)
 * @method string getTextBody()
 * @method $this setFromAlias($FromAlias)
 * @method string getFromAlias()
 * @method $this setReplyAddress($ReplyAddress)
 * @method string getReplyAddress()
 * @method $this setReplyAddressAlias($ReplyAddressAlias)
 * @method string getReplyAddressAlias()
 * @method $this setClickTrace($ClickTrace)
 * @method string getClickTrace()
 */
final class SingleSendMail extends DmCommon
{
    public $action = 'SingleSendMail';
}
