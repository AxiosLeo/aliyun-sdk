<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 * @method $this setSubscriptionType($SubscriptionType)
 * @method string getSubscriptionType()
 * @method $this setInstanceIDs($InstanceIDs)
 * @method string getInstanceIDs()
 * @method $this setEndTimeStart($EndTimeStart)
 * @method string getEndTimeStart()
 * @method $this setEndTimeEnd($EndTimeEnd)
 * @method string getEndTimeEnd()
 * @method $this setCreateTimeStart($CreateTimeStart)
 * @method string getCreateTimeStart()
 * @method $this setCreateTimeEnd($CreateTimeEnd)
 * @method string getCreateTimeEnd()
 * @method $this setRenewStatus($RenewStatus)
 * @method string getRenewStatus()
 */
final class QueryAvailableInstances extends BssOpenApiCommon
{
    public $action = 'QueryAvailableInstances';
}
