<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 */
final class DescribeLiveDomainMapping extends LiveCommon
{
    public $action = 'DescribeLiveDomainMapping';
}
