<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 */
final class DescribeDomainCname extends CdnCommon
{
    public $action = 'DescribeDomainCname';
}
