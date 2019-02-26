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
 * @method $this setFrom($From)
 * @method string getFrom()
 * @method $this setTo($To)
 * @method string getTo()
 */
final class ListMedia extends MtsCommon
{
    public $action = 'ListMedia';
}
