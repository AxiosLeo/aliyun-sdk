<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setApgroupId($ApgroupId)
 * @method integer getApgroupId()
 * @method $this setCompanyId($CompanyId)
 * @method integer getCompanyId()
 * @method $this setStart($Start)
 * @method integer getStart()
 * @method $this setEnd($End)
 * @method integer getEnd()
 * @method $this setZoomStart($ZoomStart)
 * @method integer getZoomStart()
 * @method $this setZoomEnd($ZoomEnd)
 * @method integer getZoomEnd()
 */
final class GetOnlineApTimeSer extends CloudwfCommon
{
    public $action = 'GetOnlineApTimeSer';
}
