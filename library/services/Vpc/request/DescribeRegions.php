<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 * @method $this setAcceptLanguage($AcceptLanguage)
 * @method string getAcceptLanguage()
 */
final class DescribeRegions extends VpcCommon
{
    public $action = 'DescribeRegions';
}
