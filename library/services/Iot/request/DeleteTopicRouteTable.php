<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSrcTopic($SrcTopic)
 * @method string getSrcTopic()
 * @method $this setDstTopic($DstTopic)
 * @method array getDstTopic()
 */
final class DeleteTopicRouteTable extends IotCommon
{
    public $action = 'DeleteTopicRouteTable';
}
