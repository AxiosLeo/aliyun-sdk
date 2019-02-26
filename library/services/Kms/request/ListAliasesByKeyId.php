<?php
namespace aliyun\sdk\services\Kms\request;

use aliyun\sdk\services\Kms\KmsCommon;

/**
 * @method $this setKeyId($KeyId)
 * @method string getKeyId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setSTSToken($STSToken)
 * @method string getSTSToken()
 */
final class ListAliasesByKeyId extends KmsCommon
{
    public $action = 'ListAliasesByKeyId';
}
