<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setJobId($JobId)
 * @method string getJobId()
 * @method $this setStrategy($Strategy)
 * @method string getStrategy()
 * @method $this setStatusList($StatusList)
 * @method array getStatusList()
 * @method $this setIsDesc($IsDesc)
 * @method boolean getIsDesc()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setQueryType($QueryType)
 * @method string getQueryType()
 * @method $this setQueryString($QueryString)
 * @method string getQueryString()
 */
final class ListExecutionPlans extends EmrCommon
{
    public $action = 'ListExecutionPlans';
}
