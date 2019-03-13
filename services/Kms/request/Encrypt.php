<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setKeyId($KeyId)
 * @method string getKeyId()
 * @method $this setPlaintext($Plaintext)
 * @method string getPlaintext()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 * @method $this setEncryptionContext($EncryptionContext)
 * @method string getEncryptionContext()
 */
final class Encrypt extends KmsCommon
{
    public $action = 'Encrypt';
}
