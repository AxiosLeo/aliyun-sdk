<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDataSourceId($DataSourceId)
 * @method string getDataSourceId()
 */
final class MetastoreDescribeDataSource extends EmrCommon
{
    public $action = 'MetastoreDescribeDataSource';
}
