<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setExpiryTimeEnd($ExpiryTimeEnd)
 * @method string getExpiryTimeEnd()
 * @method $this setExpiryTimeStart($ExpiryTimeStart)
 * @method string getExpiryTimeStart()
 * @method $this setEffectiveOrNot($EffectiveOrNot)
 * @method boolean getEffectiveOrNot()
 */
final class QueryPrepaidCards extends BssOpenApiCommon
{
    public $action = 'QueryPrepaidCards';
}
