<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPageNo($PageNo)
 * @method integer getPageNo()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setKeyWord($KeyWord)
 * @method string getKeyWord()
 * @method $this setStatus($Status)
 * @method integer getStatus()
 */
final class QueryTaskByParam extends DmCommon
{
    public $action = 'QueryTaskByParam';
}
