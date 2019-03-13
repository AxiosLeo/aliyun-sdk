<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setKeyId($KeyId)
 * @method string getKeyId()
 * @method $this setAliasName($AliasName)
 * @method string getAliasName()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 */
final class CreateAlias extends KmsCommon
{
    public $action = 'CreateAlias';
}
