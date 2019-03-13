<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setDataSourceName($DataSourceName)
 * @method string getDataSourceName()
 * @method $this setSourceType($SourceType)
 * @method string getSourceType()
 * @method $this setClusterReleased($ClusterReleased)
 * @method boolean getClusterReleased()
 */
final class MetastoreListDataSource extends EmrCommon
{
    public $action = 'MetastoreListDataSource';
}
