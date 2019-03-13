<?php
namespace aliyun\sdk\services\SasApi\request;

use aliyun\sdk\services\SasApi\SasApiCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setEndDate($EndDate)
 * @method string getEndDate()
 * @method $this setHitDay($HitDay)
 * @method integer getHitDay()
 * @method $this setStartDate($StartDate)
 * @method string getStartDate()
 * @method $this setApiType($ApiType)
 * @method integer getApiType()
 */
final class DescribeHitRateColumn extends SasApiCommon
{
    public $action = 'DescribeHitRateColumn';
}
