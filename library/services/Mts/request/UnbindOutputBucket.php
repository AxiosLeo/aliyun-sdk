<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBucket($Bucket)
 * @method string getBucket()
 */
final class UnbindOutputBucket extends MtsCommon
{
    public $action = 'UnbindOutputBucket';
}
