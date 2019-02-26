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
 * @method $this setDate($Date)
 * @method string getDate()
 * @method $this setAnalysisType($AnalysisType)
 * @method string getAnalysisType()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumbers($PageNumbers)
 * @method integer getPageNumbers()
 * @method $this setNodeId($NodeId)
 * @method string getNodeId()
 */
final class DescribeCacheAnalysisReport extends RKvstoreCommon
{
    public $action = 'DescribeCacheAnalysisReport';
}
