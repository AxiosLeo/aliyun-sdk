<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setMailAddressId($MailAddressId)
 * @method integer getMailAddressId()
 */
final class CheckReplyToMailAddress extends DmCommon
{
    public $action = 'CheckReplyToMailAddress';
}
