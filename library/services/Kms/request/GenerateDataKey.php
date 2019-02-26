<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setKeyId($KeyId)
 * @method string getKeyId()
 * @method $this setKeySpec($KeySpec)
 * @method string getKeySpec()
 * @method $this setNumberOfBytes($NumberOfBytes)
 * @method integer getNumberOfBytes()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 * @method $this setEncryptionContext($EncryptionContext)
 * @method string getEncryptionContext()
 */
final class GenerateDataKey extends KmsCommon
{
    public $action = 'GenerateDataKey';
}
