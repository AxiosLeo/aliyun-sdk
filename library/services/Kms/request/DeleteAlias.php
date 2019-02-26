<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setAliasName($AliasName)
 * @method string getAliasName()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 */
final class DeleteAlias extends KmsCommon
{
    public $action = 'DeleteAlias';
}
