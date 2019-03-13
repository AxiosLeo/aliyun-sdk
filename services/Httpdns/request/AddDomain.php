<?php
namespace aliyun\sdk\services\Httpdns\request;

use aliyun\sdk\services\Httpdns\HttpdnsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAccountId($AccountId)
 * @method string getAccountId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 */
final class AddDomain extends HttpdnsCommon
{
    public $action = 'AddDomain';
}
