<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setExpiryTimeStart($ExpiryTimeStart)
 * @method string getExpiryTimeStart()
 * @method $this setExpiryTimeEnd($ExpiryTimeEnd)
 * @method string getExpiryTimeEnd()
 * @method $this setEffectiveOrNot($EffectiveOrNot)
 * @method boolean getEffectiveOrNot()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryRedeem extends BssOpenApiCommon
{
    public $action = 'QueryRedeem';
}
