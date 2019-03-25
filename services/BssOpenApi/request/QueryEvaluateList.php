<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setType($Type)
 * @method integer getType()
 * @method $this setOutBizId($OutBizId)
 * @method string getOutBizId()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setStartAmount($StartAmount)
 * @method integer getStartAmount()
 * @method $this setEndAmount($EndAmount)
 * @method integer getEndAmount()
 * @method $this setStartBizTime($StartBizTime)
 * @method string getStartBizTime()
 * @method $this setEndBizTime($EndBizTime)
 * @method string getEndBizTime()
 * @method $this setBizTypeList($BizTypeList)
 * @method array getBizTypeList()
 * @method $this setSortType($SortType)
 * @method integer getSortType()
 * @method $this setStartSearchTime($StartSearchTime)
 * @method string getStartSearchTime()
 * @method $this setEndSearchTime($EndSearchTime)
 * @method string getEndSearchTime()
 * @method $this setBillCycle($BillCycle)
 * @method string getBillCycle()
 */
final class QueryEvaluateList extends BssOpenApiCommon
{
    public $action = 'QueryEvaluateList';
}
