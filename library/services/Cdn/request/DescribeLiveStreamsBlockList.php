<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 */
final class DescribeLiveStreamsBlockList extends CdnCommon
{
    public $action = 'DescribeLiveStreamsBlockList';
}
