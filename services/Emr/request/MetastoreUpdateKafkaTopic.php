<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTopicId($TopicId)
 * @method string getTopicId()
 * @method $this setNumPartitions($NumPartitions)
 * @method integer getNumPartitions()
 * @method $this setAdvancedConfig($AdvancedConfig)
 * @method array getAdvancedConfig()
 */
final class MetastoreUpdateKafkaTopic extends EmrCommon
{
    public $action = 'MetastoreUpdateKafkaTopic';
}
