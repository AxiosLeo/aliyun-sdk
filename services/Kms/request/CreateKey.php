<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setKeyUsage($KeyUsage)
 * @method string getKeyUsage()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 * @method $this setOrigin($Origin)
 * @method string getOrigin()
 */
final class CreateKey extends KmsCommon
{
    public $action = 'CreateKey';
}
