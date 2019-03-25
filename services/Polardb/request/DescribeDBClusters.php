<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBClusterIds($DBClusterIds)
 * @method string getDBClusterIds()
 * @method $this setDBClusterDescription($DBClusterDescription)
 * @method string getDBClusterDescription()
 * @method $this setDBClusterStatus($DBClusterStatus)
 * @method string getDBClusterStatus()
 * @method $this setDBType($DBType)
 * @method string getDBType()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeDBClusters extends PolardbCommon
{
    public $action = 'DescribeDBClusters';
}
