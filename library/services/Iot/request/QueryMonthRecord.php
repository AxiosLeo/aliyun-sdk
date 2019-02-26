<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setMonth($Month)
 * @method string getMonth()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class QueryMonthRecord extends IotCommon
{
    public $action = 'QueryMonthRecord';
}
