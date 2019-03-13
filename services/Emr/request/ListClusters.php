<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterTypeList($ClusterTypeList)
 * @method array getClusterTypeList()
 * @method $this setCreateType($CreateType)
 * @method string getCreateType()
 * @method $this setStatusList($StatusList)
 * @method array getStatusList()
 * @method $this setIsDesc($IsDesc)
 * @method boolean getIsDesc()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setDefaultStatus($DefaultStatus)
 * @method boolean getDefaultStatus()
 */
final class ListClusters extends EmrCommon
{
    public $action = 'ListClusters';
}
