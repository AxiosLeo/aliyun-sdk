<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSid($Sid)
 * @method integer getSid()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setPer($Per)
 * @method integer getPer()
 * @method $this setDeviceType($DeviceType)
 * @method integer getDeviceType()
 * @method $this setDirc($Dirc)
 * @method string getDirc()
 */
final class DeviceShowList extends CloudwfCommon
{
    public $action = 'DeviceShowList';
}
