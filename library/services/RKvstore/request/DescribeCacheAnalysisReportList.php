<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setDays($Days)
 * @method integer getDays()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumbers($PageNumbers)
 * @method integer getPageNumbers()
 * @method $this setNodeId($NodeId)
 * @method string getNodeId()
 */
final class DescribeCacheAnalysisReportList extends RKvstoreCommon
{
    public $action = 'DescribeCacheAnalysisReportList';
}
