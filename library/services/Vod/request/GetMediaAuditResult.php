<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setResourceRealOwnerId($ResourceRealOwnerId)
 * @method integer getResourceRealOwnerId()
 */
final class GetMediaAuditResult extends VodCommon
{
    public $action = 'GetMediaAuditResult';
}
