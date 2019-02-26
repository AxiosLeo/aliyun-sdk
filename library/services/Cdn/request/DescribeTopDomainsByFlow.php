<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setProduct($Product)
 * @method string getProduct()
 * @method $this setLimit($Limit)
 * @method integer getLimit()
 */
final class DescribeTopDomainsByFlow extends CdnCommon
{
    public $action = 'DescribeTopDomainsByFlow';
}
