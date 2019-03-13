<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setVersion($Version)
 * @method string getVersion()
 * @method $this setFromType($FromType)
 * @method integer getFromType()
 */
final class MigrateMarket extends DmCommon
{
    public $action = 'MigrateMarket';
}
