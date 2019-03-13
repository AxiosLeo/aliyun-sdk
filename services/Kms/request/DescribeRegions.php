<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 */
final class DescribeRegions extends KmsCommon
{
    public $action = 'DescribeRegions';
}
