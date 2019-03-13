<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setPlanId($PlanId)
 * @method string getPlanId()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryRecordPlanDevices extends IotCommon
{
    public $action = 'QueryRecordPlanDevices';
}
