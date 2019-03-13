<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setTaskId($TaskId)
 * @method integer getTaskId()
 */
final class DescribeBatchResultCount extends AlidnsCommon
{
    public $action = 'DescribeBatchResultCount';
}
