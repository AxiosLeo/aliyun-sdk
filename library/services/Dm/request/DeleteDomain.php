<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDomainId($DomainId)
 * @method integer getDomainId()
 */
final class DeleteDomain extends DmCommon
{
    public $action = 'DeleteDomain';
}
