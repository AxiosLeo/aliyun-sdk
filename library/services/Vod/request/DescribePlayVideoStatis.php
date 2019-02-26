<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 */
final class DescribePlayVideoStatis extends VodCommon
{
    public $action = 'DescribePlayVideoStatis';
}
