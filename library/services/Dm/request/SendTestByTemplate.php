<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTemplateId($TemplateId)
 * @method integer getTemplateId()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setNickName($NickName)
 * @method string getNickName()
 * @method $this setBirthday($Birthday)
 * @method string getBirthday()
 * @method $this setGender($Gender)
 * @method string getGender()
 * @method $this setMobile($Mobile)
 * @method string getMobile()
 * @method $this setEmail($Email)
 * @method string getEmail()
 */
final class SendTestByTemplate extends DmCommon
{
    public $action = 'SendTestByTemplate';
}
