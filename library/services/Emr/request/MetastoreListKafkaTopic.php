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
 * @method $this setDataSourceId($DataSourceId)
 * @method string getDataSourceId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setTopicName($TopicName)
 * @method string getTopicName()
 */
final class MetastoreListKafkaTopic extends EmrCommon
{
    public $action = 'MetastoreListKafkaTopic';
}
