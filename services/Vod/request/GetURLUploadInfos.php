<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setJobIds($JobIds)
 * @method string getJobIds()
 * @method $this setUploadURLs($UploadURLs)
 * @method string getUploadURLs()
 */
final class GetURLUploadInfos extends VodCommon
{
    public $action = 'GetURLUploadInfos';
}
