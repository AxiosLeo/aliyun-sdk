<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setBizDate($BizDate)
 * @method string getBizDate()
 * @method $this setPageNo($PageNo)
 * @method integer getPageNo()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribePlayTopVideos extends VodCommon
{
    public $action = 'DescribePlayTopVideos';
}
