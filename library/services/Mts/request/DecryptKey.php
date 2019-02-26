<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setCiphertextBlob($CiphertextBlob)
 * @method string getCiphertextBlob()
 * @method $this setRand($Rand)
 * @method string getRand()
 */
final class DecryptKey extends MtsCommon
{
    public $action = 'DecryptKey';
}
