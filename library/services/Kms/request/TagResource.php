<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setKeyId($KeyId)
 * @method string getKeyId()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 */
final class TagResource extends KmsCommon
{
    public $action = 'TagResource';
}
