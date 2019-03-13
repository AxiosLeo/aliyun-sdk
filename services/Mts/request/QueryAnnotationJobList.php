<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAnnotationJobIds($AnnotationJobIds)
 * @method string getAnnotationJobIds()
 */
final class QueryAnnotationJobList extends MtsCommon
{
    public $action = 'QueryAnnotationJobList';
}
