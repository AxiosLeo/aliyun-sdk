<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setDataSourceId($DataSourceId)
 * @method string getDataSourceId()
 * @method $this setLocationUri($LocationUri)
 * @method string getLocationUri()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setDbSource($DbSource)
 * @method string getDbSource()
 * @method $this setClusterBizId($ClusterBizId)
 * @method string getClusterBizId()
 * @method $this setComment($Comment)
 * @method string getComment()
 */
final class MetastoreCreateDatabase extends EmrCommon
{
    public $action = 'MetastoreCreateDatabase';
}
