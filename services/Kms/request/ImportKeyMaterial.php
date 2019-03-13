<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setKeyId($KeyId)
 * @method string getKeyId()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 * @method $this setEncryptedKeyMaterial($EncryptedKeyMaterial)
 * @method string getEncryptedKeyMaterial()
 * @method $this setImportToken($ImportToken)
 * @method string getImportToken()
 * @method $this setKeyMaterialExpireUnix($KeyMaterialExpireUnix)
 * @method integer getKeyMaterialExpireUnix()
 */
final class ImportKeyMaterial extends KmsCommon
{
    public $action = 'ImportKeyMaterial';
}
