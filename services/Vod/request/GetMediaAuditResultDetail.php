<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setPageNo($PageNo)
 * @method integer getPageNo()
 */
final class GetMediaAuditResultDetail extends VodCommon
{
    public $action = 'GetMediaAuditResultDetail';
}
