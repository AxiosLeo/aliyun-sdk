<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTopicParam($TopicParam)
 * @method array getTopicParam()
 */
final class MetastoreUpdateKafkaTopicBatch extends EmrCommon
{
    public $action = 'MetastoreUpdateKafkaTopicBatch';
}
