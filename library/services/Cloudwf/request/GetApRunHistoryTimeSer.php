<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setStart($Start)
 * @method integer getStart()
 * @method $this setEnd($End)
 * @method integer getEnd()
 */
final class GetApRunHistoryTimeSer extends CloudwfCommon
{
    public $action = 'GetApRunHistoryTimeSer';
}
