<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setCiphertextBlob($CiphertextBlob)
 * @method string getCiphertextBlob()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 * @method $this setEncryptionContext($EncryptionContext)
 * @method string getEncryptionContext()
 */
final class Decrypt extends KmsCommon
{
    public $action = 'Decrypt';
}
