<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setSources($Sources)
 * @method string getSources()
 */
final class DescribeDomainsBySource extends CdnCommon
{
    public $action = 'DescribeDomainsBySource';
}
