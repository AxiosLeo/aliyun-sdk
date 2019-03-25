<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setSourceType($SourceType)
 * @method string getSourceType()
 * @method $this setCreateFrom($CreateFrom)
 * @method string getCreateFrom()
 */
final class ListDataSource extends EmrCommon
{
    public $action = 'ListDataSource';
}
