<?php
namespace aliyun\sdk\services\SasApi\request;

use aliyun\sdk\services\SasApi\SasApiCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setApiType($ApiType)
 * @method integer getApiType()
 */
final class DescribePerDateData extends SasApiCommon
{
    public $action = 'DescribePerDateData';
}
