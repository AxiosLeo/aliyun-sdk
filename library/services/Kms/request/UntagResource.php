<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setKeyId($KeyId)
 * @method string getKeyId()
 * @method $this setTagKeys($TagKeys)
 * @method string getTagKeys()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 */
final class UntagResource extends KmsCommon
{
    public $action = 'UntagResource';
}
