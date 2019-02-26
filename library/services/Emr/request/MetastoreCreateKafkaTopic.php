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
 * @method $this setTopicName($TopicName)
 * @method string getTopicName()
 * @method $this setNumPartitions($NumPartitions)
 * @method integer getNumPartitions()
 * @method $this setReplicationFactor($ReplicationFactor)
 * @method integer getReplicationFactor()
 * @method $this setAdvancedConfig($AdvancedConfig)
 * @method array getAdvancedConfig()
 */
final class MetastoreCreateKafkaTopic extends EmrCommon
{
    public $action = 'MetastoreCreateKafkaTopic';
}
