<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setFacerecogJobIds($FacerecogJobIds)
 * @method string getFacerecogJobIds()
 */
final class QueryFacerecogJobList extends MtsCommon
{
    public $action = 'QueryFacerecogJobList';
}
