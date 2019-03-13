<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setKeyId($KeyId)
 * @method string getKeyId()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 * @method $this setWrappingAlgorithm($WrappingAlgorithm)
 * @method string getWrappingAlgorithm()
 * @method $this setWrappingKeySpec($WrappingKeySpec)
 * @method string getWrappingKeySpec()
 */
final class GetParametersForImport extends KmsCommon
{
    public $action = 'GetParametersForImport';
}
