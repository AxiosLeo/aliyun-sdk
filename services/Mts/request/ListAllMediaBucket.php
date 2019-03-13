<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setNextPageToken($NextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($MaximumPageSize)
 * @method integer getMaximumPageSize()
 */
final class ListAllMediaBucket extends MtsCommon
{
    public $action = 'ListAllMediaBucket';
}
