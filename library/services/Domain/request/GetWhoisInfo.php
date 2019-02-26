<?php
namespace aliyun\sdk\services\Domain\request;

use aliyun\sdk\services\Domain\DomainCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 */
final class GetWhoisInfo extends DomainCommon
{
    public $action = 'GetWhoisInfo';
}
