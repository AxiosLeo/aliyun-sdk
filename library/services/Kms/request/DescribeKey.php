<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setKeyId($KeyId)
 * @method string getKeyId()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 */
final class DescribeKey extends KmsCommon
{
    public $action = 'DescribeKey';
}
