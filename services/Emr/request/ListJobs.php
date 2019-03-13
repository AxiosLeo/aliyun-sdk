<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
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
final class ListJobs extends EmrCommon
{
    public $action = 'ListJobs';
}
