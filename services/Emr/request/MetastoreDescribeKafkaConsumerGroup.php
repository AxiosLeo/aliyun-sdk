<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setConsumerGroupId($ConsumerGroupId)
 * @method string getConsumerGroupId()
 * @method $this setTopicId($TopicId)
 * @method string getTopicId()
 */
final class MetastoreDescribeKafkaConsumerGroup extends EmrCommon
{
    public $action = 'MetastoreDescribeKafkaConsumerGroup';
}
